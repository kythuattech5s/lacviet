<?php
namespace App\Models;
use App\Models\BaseModel;
class DentalKnowledgeTag extends BaseModel
{
    public function dentalKnowledge(){
    	return $this->belongsToMany('App\Models\DentalKnowledge', 'dental_knowledge_map_tag', 'dental_knowledge_tag_id', 'dental_knowledge_id')->publish();
    }
    public function scopeAct($q)
    {
        if (!\Auth::guard('h_users')->check()) {
            return $q->where('act', 1);
        }
    }
}
