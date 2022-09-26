<?php
namespace App\Http\Controllers;
use App\Models\{Specialist,Doctor};
use \View;
class SpecialistController extends Controller
{
	public function all($request, $route, $link)
	{
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
		$listItems = Specialist::act()->ord()->get();
		return View::make('doctors.all',compact('currentItem','listItems'));	
	}
    public function view($request, $route, $link)
    {
    	$currentItem = Specialist::slug($link)->act()->first();
        if ($currentItem == null) { abort(404); }
        $currentItem->count_view = (int)$currentItem->count_view + 1;
        $currentItem->save();
        $dataContent = \Support::createdTocContent($currentItem->content);
        $listItems = Doctor::where('specialist_id',$currentItem->id)->act()->paginate(6);
        return view('doctors.view_category',compact('currentItem','listItems'));
    }
}