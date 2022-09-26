<?php
namespace App\Http\Controllers;
use App\Models\{NewsCategory,News};
class NewsCategoryController extends Controller
{
    public function all($request, $route, $link)
    {
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        $listCateChild = NewsCategory::act()->where('type_slug',1)->ord()->get()->all();
        $listHotNews = News::act()->where('hot',1)->publish()->orderBy('time_published','desc')->limit(3)->get();
        return view('news_categories.all',compact('currentItem','listCateChild','listHotNews')); 
    }
    public function allNews($request, $route, $link)
    {
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        $listItems = News::act()->orderBy('time_published','desc')->paginate(10);
        return view('news_categories.all_news',compact('currentItem','listItems')); 
    }
    public function view($request, $route, $link){
        $currentItem = NewsCategory::slug($link)->act()->first();
        if ($currentItem == null) {
            abort(404);
        }
        $listItems = $currentItem->news()->act()->orderBy('time_published','desc')->paginate(10);
        return view('news_categories.view', compact('currentItem','listItems'));
    }
}