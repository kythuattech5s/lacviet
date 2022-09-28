<?php
namespace App\Http\Controllers;
use App\Models\{QuestionCategory,Question};
use \View;
class QuestionCategoryController extends Controller
{
	public function all($request, $route, $link)
	{
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
		$listItems = Question::act()->Ord()->paginate(6);
		return View::make('question_categories.all',compact('currentItem','listItems'));	
	}
    public function view($request, $route, $link)
    {
    	$currentItem = QuestionCategory::slug($link)->act()->first();
        if ($currentItem == null) { abort(404); }
        $listIdCateChild = QuestionCategory::getListCateChildId($currentItem->id);
        $listItems = Question::whereIn('parent',$listIdCateChild)->act()->orderBy('time_ask','desc')->paginate(12);
        return view('question_categories.view',compact('currentItem','listItems'));
    }
}