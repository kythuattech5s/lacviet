<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\VideoGallery;
use App\Models\NewsCategory;
class NewsController extends Controller
{	
    public function view($request, $route, $link){
        if (!\Auth::guard('h_users')->check()) {
            $currentItem = News::slug($link)->with('ratings')->act()->publish()->first();
        }else {
            $currentItem = News::slug($link)->with('ratings')->first();
        }
        if ($currentItem == null) { abort(404); }
        $currentItem->count_view = (int)$currentItem->count_view + 1;
        $currentItem->save();
        $parent = $currentItem->category()->act()->orderBy('id','desc')->first();
        $tags = $currentItem->tags()->act()->get();
        $newsRelateds = $currentItem->getRelatesCollection();
        $listIdNewSelect = explode(',',$currentItem->same_topic);
        array_push($listIdNewSelect,-1);
        $listNewsSelect = News::whereIn('id',$listIdNewSelect)->act()->publish()->get()->all();
        $dataContent = \Support::createdTocContent($currentItem->content);
        $listMostViewNews = News::act()->where('id','!=',$currentItem->id)->publish()->orderBy('count_view','desc')->limit(5)->get();
        $listHotNews = News::act()->where('hot',1)->publish()->orderBy('time_published','desc')->limit(2)->get();
        return view('news.view',compact('currentItem','tags','newsRelateds','parent','tags','dataContent','listNewsSelect','listMostViewNews','listHotNews'));
    }
}