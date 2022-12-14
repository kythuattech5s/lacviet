<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{FileGalleryCategory,FileGallery};

class FileGalleryController extends Controller

{	

    public function view($request, $route, $link){

        $currentItem = FileGallery::slug($link)->act()->first();

        if ($currentItem == null) { abort(404); }

        $currentItem->count_view = (int)$currentItem->count_view + 1;

        $currentItem->save();

        $parent = $currentItem->category()->act()->first();

        $fileRelateds = $currentItem->getRelatesCollection()->all();

        return view('file_gallery.view',compact('currentItem','parent','fileRelateds'));

    }

}