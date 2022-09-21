<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModel;

class DrugLookup extends BaseModel

{

	use HasFactory;
	public function scopeAct($q)

    {
        if (!\Auth::guard('h_users')->check()) {

            return $q->where('act', 1);
        }

    }

}