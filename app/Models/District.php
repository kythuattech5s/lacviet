<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModel;



class District extends BaseModel

{    

	use HasFactory;

	public function wards()

	{

		return $this->hasMany('App\Models\Ward', 'district_id', 'district_id');

	}
	public function scopeAct($q)

    {
        if (!\Auth::guard('h_users')->check()) {

            return $q->where('act', 1);
        }

    }
}

