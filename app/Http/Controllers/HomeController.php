<?php
namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\RedirectLink;
use Illuminate\Http\Request;
use App\Helpers\Utm;
use App\Helpers\TwoLevelSlug;
use App\Models\BranchSystem;
use App\Models\News;
use App\Models\Question;
use App\Models\ReasonChoose;
use App\Models\Services;

class HomeController extends Controller
{
    public function direction(Request $request, $link)
    {
        $lang  = \App::getLocale();
        $link  = \Support::getSegment($request, 1);
        $baseUrl = url()->to('');
        /* Check link chuyển hướng */
        $linkRedirect = RedirectLink::where('root_link', trim($_SERVER['REQUEST_URI'],'/'))->orWhere('root_link', trim($_SERVER['REQUEST_URI'],'/').'/')->first();
        
        if (isset($linkRedirect) && (int)$linkRedirect->type) {
            return \Redirect::to($baseUrl.'/'.trim($linkRedirect->redirect_link, '/').'/', $linkRedirect->type);
        }
        /* End check link chuyển hướng */
        $listTableTwoLevelSlug = TwoLevelSlug::getArrTable();
        list($link, $tableAccess) = TwoLevelSlug::checkLinkSegmentBeforGetRoutest($link);
        $route = \DB::table('v_routes')->select('*')->where($lang.'_link', $link)->first();
        if ($route == null) {
            abort(404);
        }
        if (!($tableAccess == 'doctors' && $route->table == 'specialists')) {
            if (isset($tableAccess) && $route->is_static == 0 && $tableAccess != $route->table) {
                abort(404);
            }
        }
        if ($tableAccess == 'doctors' && $route->is_static == 1) {
            return \Redirect::to($baseUrl.'/'.$link.'/', 301);
        }
        if (!isset($tableAccess) && isset($listTableTwoLevelSlug[$route->table])) {
            return \Redirect::to($baseUrl.TwoLevelSlug::convertSlugRoutes($route, $link), 301);
        }
        /* Check link đuôi có dấu / */
        if (substr($_SERVER['REDIRECT_URL'], -1) != '/') {
            $newUrl = $baseUrl.$_SERVER['REDIRECT_URL'].'/'.($_SERVER['QUERY_STRING'] != '' ? '?'.$_SERVER['QUERY_STRING'] : '');
            return \Redirect::to($newUrl, 301);
        }
        /* End check link đuôi có dấu / */

        $maxSegment = 1;
        if (isset($tableAccess)) {
            $maxSegment = 2;
        }
        if (count($request->segments()) > $maxSegment) {
            abort(404);
        }
        Utm::check();
        $controllers = explode('@', $route->controller);
        $controller = $controllers[0];
        $method = $controllers[1];
        return (new $controller)->$method($request, $route, $link);
    }
    public function index()
    {
        Utm::check();
        $isHome = 1;
        $listBanner = Banner::act()->where('time_show','>',new \DateTime())->where('time_public','<',new \DateTime())->ord()->get();
        $listReasonChoose = ReasonChoose::act()->ord()->get();
        $listHotService = Services::act()->where('hot',1)->ord()->get();
        $listBranchSystem = BranchSystem::act()->ord()->get();
        $listHomeNews = News::act()->where('home',1)->publish()->orderBy('time_published','desc')->limit(4)->get();
        $listQuestion = Question::act()->orderBy('id','desc')->limit(4)->get();
        return view('home', compact('listBanner','isHome','listReasonChoose','listHotService','listBranchSystem','listHomeNews','listQuestion'));
    }
}