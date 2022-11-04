<?php
namespace App\Http\Controllers;
use App\Models\{Doctor,Specialist};
class DoctorController extends Controller
{
    public function view($request, $route, $link)
    {
    	$currentItem = Doctor::slug($link)->act()->first();
        if ($currentItem == null) { abort(404); }
        $currentItem->count_view = (int)$currentItem->count_view + 1;
        $currentItem->save();
        $listRelateDoctor = Doctor::where('id','!=',$currentItem->id)->inRandomOrder()->where('specialist_id',$currentItem->specialist_id)->act()->limit(10)->get();
        $dataContent = \Support::createdTocContent($currentItem->content);
        $listDoctorNews = $currentItem->news()->limit(3)->get();
        $listNewsCustomer = $currentItem->getListNewCustomer();
        $listNewsMagazine = $currentItem->getListNewMagazine();
        return view('doctors.view',compact('currentItem','dataContent','listRelateDoctor','listDoctorNews','listNewsCustomer','listNewsMagazine'));
    }
}