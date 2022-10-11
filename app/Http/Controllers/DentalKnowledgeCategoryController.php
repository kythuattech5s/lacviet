<?php
namespace App\Http\Controllers;
use App\Models\{DentalKnowledgeCategory,DentalKnowledge};
class DentalKnowledgeCategoryController extends Controller
{
    public function all($request, $route, $link)
    {
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        $listCateChild = DentalKnowledgeCategory::act()->where('type_slug',1)->ord()->get()->all();
        $listHotNews = DentalKnowledge::act()->where('hot',1)->publish()->orderBy('time_published','desc')->limit(3)->get();
        return view('dental_knowledge_categories.all',compact('currentItem','listCateChild','listHotNews')); 
    }
    public function allNews($request, $route, $link)
    {
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        $listItems = DentalKnowledge::act()->orderBy('time_published','desc')->paginate(10);
        return view('dental_knowledge_categories.all_news',compact('currentItem','listItems')); 
    }
    public function view($request, $route, $link){
        $currentItem = DentalKnowledgeCategory::slug($link)->act()->first();
        if ($currentItem == null) {
            abort(404);
        }
        $listItems = $currentItem->dentalKnowledge()->act()->orderBy('time_published','desc')->paginate(10);
        return view('dental_knowledge_categories.view', compact('currentItem','listItems'));
    }
}