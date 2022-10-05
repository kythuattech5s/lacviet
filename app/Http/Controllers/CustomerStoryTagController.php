<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{CustomerStory,CustomerStoryTag};

class DentalKnowledgeTagController extends Controller
{
    public function view($request, $route, $link)
    {
    	$currentItem = CustomerStoryTag::slug($link)->act()->ord()->first();
    	if ($currentItem == null) {
    		abort(404);
    	}
    	$listItems = $currentItem->customerStory()->act()->orderBy('time_published','desc')->paginate(12);
    	return view('customer_story_tags.view', compact('currentItem', 'listItems'));
    }
}
