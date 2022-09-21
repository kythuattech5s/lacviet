<?php

namespace App\Models;

use App\Models\BaseModel;

class ServiceCategory extends BaseModel

{

	protected $table = 'service_category';

    public function services(){

    	return $this->belongsToMany('App\Models\Services', 'services_service_category', 'service_category_id', 'services_id');

    }
    public function scopeAct($q)

    {
        if (!\Auth::guard('h_users')->check()) {

            return $q->where('act', 1);
        }

    }

}