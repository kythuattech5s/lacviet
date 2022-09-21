<?php
namespace App\Http\Controllers;
use App\Models\{Specialist,Doctor};
use \View;
use Illuminate\Http\Request;
use Carbon\Carbon;
class SpecialistController extends Controller
{
	public function all($request, $route, $link)
	{
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
		$listItems = Specialist::act()->Ord()->paginate(12);
		return View::make('specialists.all',compact('currentItem','listItems'));	
	}
    public function view($request, $route, $link)
    {
    	$currentItem = Specialist::slug($link)->act()->first();
        if ($currentItem == null) { abort(404); }
        if (\Support::getSegment($request, 1) == 'doi-ngu-bac-si') {
            $currentItem->seo_des = $currentItem->seo_des_doctor;
            $currentItem->seo_key = $currentItem->seo_key_doctor;
            $currentItem->seo_title = $currentItem->seo_title_doctor;
            $currentItem->share_description_facebook = $currentItem->seo_des_doctor;
            $currentItem->share_title_facebook = $currentItem->seo_title_doctor;
            if ($currentItem->share_image_facebook_doctor != '') {
                $currentItem->share_image_facebook = $currentItem->share_image_facebook_doctor;
            }
            $currentItem->name = $currentItem->seo_title != '' ? $currentItem->seo_title:$currentItem->name;
            $listSpecialist = Specialist::act()->get();
            $listItems = Doctor::act()->where('specialist_id',$currentItem->id)->Ord()->paginate(12);
            return View::make('doctors.view_specialist',compact('currentItem','listItems','listSpecialist'));   
        }else {
            $currentItem->count_view = (int)$currentItem->count_view + 1;
            $currentItem->save();
            $dataContent = \Support::createdTocContent($currentItem->content);
            $listRelateDoctor = Doctor::where('specialist_id',$currentItem->id)->act()->get();
            return view('specialists.view',compact('currentItem','listRelateDoctor','dataContent'));
        }
    }
}