<?php
namespace App\Http\Controllers;
use App\Models\{ServiceCategory};
class ServiceCategoryController extends Controller
{
    public function view($request, $route, $link){
        if (!\Auth::guard('h_users')->check()) {
            $currentItem = ServiceCategory::slug($link)->act()->first();
        }else {
            $currentItem = ServiceCategory::slug($link)->first();
        }
        if ($currentItem == null) {
            abort(404);
        }
        $currentItem->count_view = (int)$currentItem->count_view + 1;
        $currentItem->save();
        $listItems = $currentItem->services()->act()->ord()->paginate(12);
        return view('service_categories.view', compact('currentItem','listItems'));
    }
}