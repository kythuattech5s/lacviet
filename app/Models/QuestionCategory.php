<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;
class QuestionCategory extends BaseModel
{
	use HasFactory;
	protected $table = 'questions_categories';
	public function scopeAct($q)
    {
        if (!\Auth::guard('h_users')->check()) {
            return $q->where('act', 1);
        }
    }
	public function child()
	{
		return $this->hasMany(QuestionCategory::class,'parent','id');
	}
	public function question()
	{
		return $this->hasMany('App\Models\Question', 'parent', 'id');
	} 
}