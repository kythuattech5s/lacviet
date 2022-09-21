<?php
namespace App\Models;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;
class Services extends BaseModel
{
	protected $table = 'services';
    protected static function booted()
    {
        if (!\Auth::guard('h_users')->check()) {
            static::addGlobalScope('draft', function (Builder $q) {
                $q->where(function($q){
                    $q->whereNull('is_draft')->orWhere('is_draft', 0);
                });
            });
            static::addGlobalScope('trash', function (Builder $q) {
                $q->where(function($q){
                    $q->whereNull('trash')->orWhere('trash', 0);
                });
            });
        }
    }
    public function pivot(){
    	return $this->hasMany('\App\Models\ServicesServiceCategory', 'services_id', 'id');
    }
    public function scopeAct($q)
    {
        if (!\Auth::guard('h_users')->check()) {
            return $q->where('act', 1);
        }
    }
    public function category()
    {
    	return $this->belongsToMany('App\Models\ServiceCategory','services_service_category', 'services_id','service_category_id');
    }
}
