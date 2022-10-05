<?php
namespace App\Models;
use App\Models\BaseModel;
class CustomerStoryCategory extends BaseModel
{
    public function customerStory(){
    	return $this->belongsToMany('App\Models\CustomerStory', 'customer_story_map_category', 'customer_story_category_id', 'customer_story_id')->publish();
    }
    public function scopeAct($q)
    {
        if (!\Auth::guard('h_users')->check()) {
            return $q->where('act', 1);
        }
    }
}
