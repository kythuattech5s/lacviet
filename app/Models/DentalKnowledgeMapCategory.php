<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentalKnowledgeMapCategory extends Model
{
    use HasFactory;
    protected $table = 'dental_knowledge_map_category';
    public function dentalKnowledgeCategory()
    {
    	return $this->belongsTo('App\Models\DentalKnowledgeCategory', 'dental_knowledge_category_id', 'id');
    }
}
