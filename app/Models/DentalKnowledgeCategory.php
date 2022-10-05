<?php
namespace App\Models;
use App\Models\BaseModel;
class DentalKnowledgeCategory extends BaseModel
{
    public function dentalKnowledge(){
    	return $this->belongsToMany('App\Models\DentalKnowledge', 'dental_knowledge_map_category', 'dental_knowledge_category_id', 'dental_knowledge_id')->publish();
    }
    public function scopeAct($q)
    {
        if (!\Auth::guard('h_users')->check()) {
            return $q->where('act', 1);
        }
    }
}
