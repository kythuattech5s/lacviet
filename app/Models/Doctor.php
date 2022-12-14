<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Doctor extends BaseModel
{
	use HasFactory;
	public function specialist()
	{
		return $this->belongsTo(Specialist::class);
	}
    public function news()
	{
		return $this->hasMany(News::class);
	}
    public function scopeAct($q)
    {
        if (!\Auth::guard('h_users')->check()) {
            return $q->where('act', 1);
        }
    }
    public function getListNewCustomer()
    {
        return News::act()->publish()->whereIn('id',explode(',',$this->list_new_customer))->get();
    }
    public function getListNewMagazine()
    {
        return News::act()->publish()->whereIn('id',explode(',',$this->list_new_magazine))->get();
    }
	public function ratings()
    {
        return $this->hasMany(Rating::class, 'map_id', 'id')->where('map_table', 'doctors');
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
}