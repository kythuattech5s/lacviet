<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Province extends BaseModel
{
	use HasFactory;
	public function district()
	{
		return $this->hasMany('App\Models\District', 'province_id', 'province_id');
	}
	public function branchSystem()
	{
		return $this->hasMany(BranchSystem::class);
	}
}