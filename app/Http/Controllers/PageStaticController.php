<?php
namespace App\Http\Controllers;

use App\Models\PageStatic;

class PageStaticController extends Controller
{	
    public function view($request, $route, $link){
        $currentItem = PageStatic::slug($link)->act()->first();
        if ($currentItem == null) { abort(404); }
        $currentItem->count = (int)$currentItem->count_view + 1;
        $currentItem->save();
        $dataContent = \Support::createdTocContent($currentItem->content);
        return view('page_statics.'.$currentItem->layout_show,compact('currentItem','dataContent'));
    }
}