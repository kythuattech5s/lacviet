<?php
namespace App\Http\Controllers;
use App\Models\{CustomerStoryCategory,CustomerStory};
class CustomerStoryCategoryController extends Controller
{
    public function all($request, $route, $link)
    {
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        $listCateChild = CustomerStoryCategory::act()->where('type_slug',1)->ord()->get()->all();
        $listHotNews = CustomerStory::act()->where('hot',1)->publish()->orderBy('time_published','desc')->limit(3)->get();
        return view('customer_story_categories.all',compact('currentItem','listCateChild','listHotNews')); 
    }
    public function allNews($request, $route, $link)
    {
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        $listItems = CustomerStory::act()->orderBy('time_published','desc')->paginate(10);
        return view('customer_story_categories.all_news',compact('currentItem','listItems')); 
    }
    public function view($request, $route, $link){
        $currentItem = CustomerStoryCategory::slug($link)->act()->first();
        if ($currentItem == null) {
            abort(404);
        }
        $listItems = $currentItem->customerStory()->act()->orderBy('time_published','desc')->paginate(10);
        return view('customer_story_categories.view', compact('currentItem','listItems'));
    }
}