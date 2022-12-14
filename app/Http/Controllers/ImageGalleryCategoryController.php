<?php

namespace App\Http\Controllers;

use App\Models\{ImageGalleryCategory,ImageGallery};

use \View;

use Illuminate\Http\Request;

use Carbon\Carbon;

class ImageGalleryCategoryController extends Controller

{

	public function all($request, $route, $link)

	{

        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);

		$listItems = ImageGalleryCategory::act()->Ord()->paginate(12);

        $listHotItems = ImageGallery::where('hot',1)->act()->get()->all();

		return View::make('image_gallery_categories.all',compact('currentItem','listItems','listHotItems'));	

	}

    public function view($request, $route, $link){

        $currentItem = ImageGalleryCategory::slug($link)->act()->first();

        if ($currentItem == null) {

            abort(404);

        }

        $listItems = $currentItem->imageGallery()->act()->ord()->paginate(11);

        return view('image_gallery_categories.view', compact('currentItem','listItems'));

    }

}