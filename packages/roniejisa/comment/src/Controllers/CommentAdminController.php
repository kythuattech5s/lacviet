<?php

namespace CommentRS\Controllers;

use CommentRS\Helpers\Helper;
use CommentRS\Models\Comment;
use Illuminate\Http\Request;
use vanhenry\manager\controller\BaseAdminController;

class CommentAdminController extends BaseAdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('h_users');
    }

    public function detailComment(Request $request)
    {
        $model = $request->input('model');
        $parent_field = $request->input('parentField');
        $nameTable = $request->input('nameTable');
        $id = $request->input('id');
        $comment = $model::find($id);
        if ($comment->parent != 0) {
            $comment = $model::find($comment->$parent_field);
        }
        if ($comment == null) {
            return redirect()->back()->with(['typeNotify' => 'danger', 'messageNotify' => $nameTable . ' này hiện tại đã bị xóa']);
        }
        return view('commentRS::comments.detail_comment', compact('comment'));
    }
    public function repComment(Request $request)
    {
        if (trim($request->content) == '' || empty($request->content)) {
            return response()->json([
                'code' => 100,
                'message' => 'Vui lòng nhập bình luận của bạn',
            ]);
        }
        $model = $request->input('model');
        $parent = $this->getParent($request->parent);
        $field_parent = $request->input('field_parent');
        $comment = new $model;
        $comment->map_id = $parent->map_id;
        $comment->map_table = $parent->map_table;
        $comment->content = $request->content;
        $comment->$field_parent = $parent->id;
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'plus-') !== false) {
                $field = str_replace('plus-', '', $key);
                $comment->$field = $value;
            }
        }
        $comment->act = 1;
        $comment->save();
        return response()->json([
            'code' => 200,
            'message' => 'Đã trả lời bình luận thành công',
        ]);
    }
    public function getParent($id)
    {
        $model = request()->input('model');
        return $model::find($id);
    }
    public function fetchComment($id)
    {
        $models = request()->input('model');
        $comment = $models::find($id);
        $field_parent = request()->input('field_parent');
        if ($comment->$field_parent != 0) {
            $comment = $models::find($comment->$field_parent);
        }
        $viewInput = request()->input('view');
        $view = view($viewInput, compact('comment'))->render();
        return response()->json(['view' => $view]);
    }
    public function changeAct(Request $request, $id)
    {
        $model = $request->input('model');
        $comment = $model::find($id);
        $comment->act = $request->act;
        $comment->save();

        $rating = $comment->rating;
        if ($rating != null) {
            $rating->act = $request->act;
            $rating->save();
        }
        if ($request->act == 1) {
            $data = ['code' => 200, 'message' => 'Đã cho hiển thị'];
        } else {
            $data = ['code' => 100, 'message' => 'Đã ẩn'];
        }
        Helper::buildDataRating($comment->map_table, $comment->map_id);
        return response()->json($data);
    }
}
