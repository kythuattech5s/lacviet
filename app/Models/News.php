<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BaseModel;
use App\Models\NewsNewsTag;
use App\Models\NewsNewsCategory;
class News extends BaseModel
{
	protected $table = 'news';
    
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
    public function tags()
    {
    	return $this->belongsToMany('App\Models\NewsTag', 'news_news_tag', 'news_id', 'news_tag_id')->act()->ord();
    }
    public function pivot(){
    	return $this->hasMany('\App\Models\NewsNewsCategory', 'news_id', 'id');
    }
    
    public function category()
    {
    	return $this->belongsToMany('App\Models\NewsCategory');
    }
    
    public function getRelates()
    {
        $category = $this->category()->act()->first();
        if ($category == null) {
            return null;
        }
        return $category->news();
    }
    public function getRelatesCollection(){
        $relate = $this->getRelates();
        return $relate?$relate->act()->where('id','!=',$this->id)->orderBy('time_published','desc')->take(6)->get():collect();
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class, 'map_id', 'id')->where('map_table', 'news');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'map_id','id')->where('map_table','news')->whereNull('comment_id');
    }
    public function getRating(String $type = 'main'){
        $ratings = $this->ratings;
        $oneStar = 0;
        $twoStar = 0;
        $threeStar = 0;
        $fourStar = 0;
        $fiveStar = 0;
        $percentOneStar = 0;
        $percentTwoStar = 0;
        $percentThreeStar = 0;
        $percentFourStar = 0;
        $percentFiveStar = 0;
        $totalRating = $ratings->count();
        $percentAll = 0;
        $scoreAll = 0;
        if($totalRating == 0){
            if($type == 'main'){
                return [
                    'percentAll' => 0,
                    'scoreAll' => 0,
                    'totalRating' => 0
                ];
            }
            return [
                'oneStar' => 0,
                'twoStar' => 0,
                'threeStar' => 0,
                'fourStar' => 0,
                'fiveStar' => 0,
                'percentOneStar' => 0,
                'percentTwoStar' => 0,
                'percentThreeStar' => 0,
                'percentFourStar' => 0,
                'percentFiveStar' => 0,
                'totalRating' => 0,
                'percentAll' => 0,
                'scoreAll' => 0,
            ];
        }
        $oneStar = $ratings->filter(function($value,$key){
            return (int) $value->rating === 1;
        })->count();
        $twoStar = $ratings->filter(function($value,$key){
            return (int) $value->rating === 2;
        })->count();
        $threeStar = $ratings->filter(function($value,$key){
            return (int) $value->rating === 3;
        })->count();
        $fourStar = $ratings->filter(function($value,$key){
            return (int) $value->rating === 4;
        })->count();
        $fiveStar = $ratings->filter(function($value,$key){
            return (int) $value->rating === 5;
        })->count();
        $percentAll = round(($oneStar + $twoStar * 2 + $threeStar * 3 + $fourStar * 4 + $fiveStar * 5)/($totalRating*5)*100);
        
        $scoreAll = round($percentAll / 20,2);
        if($type == 'main'){
            return [
                'percentAll' => $percentAll,
                'scoreAll' => $scoreAll,
                'totalRating' => $totalRating
            ];
        }
        
        $percentOneStar   = round($oneStar  / $totalRating * 100);
        $percentTwoStar   = round($twoStar  / $totalRating * 100);
        $percentThreeStar = round($threeStar/ $totalRating * 100);
        $percentFourStar  = round($fourStar / $totalRating * 100);
        $percentFiveStar  = round($fiveStar / $totalRating * 100);
        
        
        return [
            'oneStar' => $oneStar,
            'twoStar' => $twoStar,
            'threeStar' => $threeStar,
            'fourStar' => $fourStar,
            'fiveStar' => $fiveStar,
            'percentOneStar' => $percentOneStar,
            'percentTwoStar' => $percentTwoStar,
            'percentThreeStar' => $percentThreeStar,
            'percentFourStar' => $percentFourStar,
            'percentFiveStar' => $percentFiveStar,
            'totalRating' => $totalRating,
            'percentAll' => $percentAll,
            'scoreAll' => $scoreAll,
        ];
    }
    public function getDoctor()
    {
        return Doctor::where('id',$this->doctor_id)->act()->first();
    }
    public function getSpecialist()
    {
        return Specialist::where('id',$this->specialist_id)->act()->first();
    }
}
