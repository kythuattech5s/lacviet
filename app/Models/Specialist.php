<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Specialist extends BaseModel
{
	use HasFactory;
	public function scopeAct($q)
    {
        if (!\Auth::guard('h_users')->check()) {
            return $q->where('act', 1);
        }
    }
    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }
}

