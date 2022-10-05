<?php
namespace App\Models;
use App\Models\BaseModel;
class CustomerStoryTag extends BaseModel
{
    public function customerStory(){
    	return $this->belongsToMany('App\Models\CustomerStory', 'customer_story_map_tag', 'customer_story_tag_id', 'customer_story_id')->publish();
    }
    public function scopeAct($q)
    {
        if (!\Auth::guard('h_users')->check()) {
            return $q->where('act', 1);
        }
    }
}
