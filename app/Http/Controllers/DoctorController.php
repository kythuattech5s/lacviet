<?php
namespace App\Http\Controllers;
use App\Models\{Doctor};
class DoctorController extends Controller
{
    public function view($request, $route, $link)
    {
    	$currentItem = Doctor::slug($link)->act()->first();
        if ($currentItem == null) { abort(404); }
        $currentItem->count_view = (int)$currentItem->count_view + 1;
        $currentItem->save();
        $listRelateDoctor = Doctor::where('id','!=',$currentItem->id)->inRandomOrder()->act()->limit(10)->get();
        $dataContent = \Support::createdTocContent($currentItem->content);
        $listDoctorNews = $currentItem->news()->act()->publish()->limit(3)->get();
        $listNewCustomer = $currentItem->getListNewCustomer();
        $listNewMagazine = $currentItem->getListNewMagazine();
        return view('doctors.view',compact('currentItem','dataContent','listRelateDoctor','listDoctorNews','listNewCustomer','listNewMagazine'));
    }
}