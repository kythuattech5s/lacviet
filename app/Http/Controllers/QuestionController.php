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
    public function favouriteQuestion($request)
    {
        $currentItem = Question::act()->find($request->id);
        if (!isset($currentItem)) {
            return response()->json([
                'code' => 100,
                'message' => 'Không tìm thấy thông tin câu hỏi.'
            ]);
        }
        switch ($request->type) {
            case 'unlike':
                $currentItem->unlike = $currentItem->unlike + 1;
                break;
            default:
                $currentItem->like = $currentItem->like + 1;
                break;
        }
        $currentItem->save();
        return response()->json([
            'code' => 200,
            'message' => 'Cảm ơn đánh giá của bạn.',
            'countLike' => $currentItem->like,
            'countUnLike' => $currentItem->unlike,
        ]);
    }
}