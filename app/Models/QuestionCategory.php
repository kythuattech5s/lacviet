<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;
class QuestionCategory extends BaseModel
{
	use HasFactory;
	protected $table = 'questions_categories';
	public static function getListCateChildId($id)
	{
		$listId = [$id];
		$allCate = static::select('id','parent')->get();
		while (count($allCate->whereIn('parent',$listId)->whereNotIn('id',$listId)) > 0) {
			foreach ($allCate->whereIn('parent',$listId)->whereNotIn('id',$listId) as $item) {
				array_push($listId,$item->id);
			}
		}
		return $listId;
	}
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