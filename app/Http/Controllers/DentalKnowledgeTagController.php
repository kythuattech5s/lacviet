<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{DentalKnowledge,DentalKnowledgeCategory,DentalKnowledgeTag};

class DentalKnowledgeTagController extends Controller
{
    public function view($request, $route, $link)
    {
    	$currentItem = DentalKnowledgeTag::slug($link)->act()->ord()->first();
    	if ($currentItem == null) {
    		abort(404);
    	}
    	$listItems = $currentItem->dentalKnowledge()->act()->orderBy('time_published','desc')->paginate(12);
    	return view('dental_knowledge_tags.view', compact('currentItem', 'listItems'));
    }
}
