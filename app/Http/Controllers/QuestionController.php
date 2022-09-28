<?php
namespace App\Http\Controllers;
use App\Models\{Question,Doctor};
class QuestionController extends Controller
{	
    public function view($request, $route, $link){
        $currentItem = Question::slug($link)->with(['comments'])->act()->first();
        if ($currentItem == null) { abort(404); }
        $currentItem->count_view = (int)$currentItem->count_view + 1;
        $currentItem->save();
        $parent = $currentItem->category()->act()->first();
        $questionRelateds = $currentItem->getRelatesCollection();
        $doctor = Doctor::find($currentItem->doctor_id);
        $comments = $currentItem->comments()->with('childs')->paginate(5);
        return view('questions.view',compact('currentItem','parent','questionRelateds','doctor','comments'));
    }
}