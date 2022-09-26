<?php
namespace App\Http\Controllers;
use App\Models\{Services};
class ServiceController extends Controller
{	
    public function view($request, $route, $link){
        $currentItem = Services::slug($link)->act()->first();
        if ($currentItem == null) { abort(404); }
        $parent = $currentItem->category()->act()->first();
        $dataContent = \Support::createdTocContent($currentItem->content);
        return view('services.view',compact('currentItem','parent','dataContent'));
    }
    public function all($request, $route, $link)
	{
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
		$listItems = Services::act()->ord()->paginate(8);
		return view('services.all',compact('currentItem','listItems'));	
	}
}