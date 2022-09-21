<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;

class BaseModel extends Model

{

    use HasFactory;

    /*method join với table dịch của insance model hiện tại*/

	public function scopePublish($q){

		return $q->where('time_published','<=',new \DateTime());

	}

	public function scopeAct($q)

	{

			return $q->where('act', 1);

	}

	public function scopeOrd($q)

	{

		return $q->orderBy('ord', 'desc')->orderBy('id', 'desc');

	}



	public function scopeDraft($q){

		$q->whereNull('is_draft');

	}



	public function scopeSlug($q, $slug, $table = null)

	{

		if ($table == null) {

			return $q->where('slug', $slug);

		}

		return $q->where("$table.slug", $slug);

	}

	public static function getNameById($id){

    	$itemService = static::find($id);

    	return isset($itemService) ? $itemService->name:'';

    }

	protected function fullTextWildcards($term)

    {

        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];

        $term = str_replace($reservedSymbols, '', $term);

        $words = explode(' ', $term);

        foreach ($words as $key => $word) {

            if (strlen($word) >= 1) {

                $words[$key] = '+' . $word  . '*';

            }

        }

        $searchTerm = implode(' ', $words);

        return $searchTerm;

    }

	public function scopeFullTextSearch($query, $columns, $term)

    {

        $query->where($columns,'like','%'.$term.'%')->orderBy('id', 'desc');

        return $query;

    }

    public function getAuthor($key)

    {

    	if (!isset($this->$key)) {

    		return null;

    	}

    	return \vanhenry\manager\model\HUser::find($this->$key);

    }

    public function getSlugAttribute($value)
    {
    	$listRedirectLink = \Cache::rememberForever('listRedirectLink', function() {
    	    $listItem = RedirectLink::select('root_link','redirect_link')->get();
    	    $ret = [];
    	    foreach ($listItem as $item) {
    	    	$ret[trim($item->root_link,'/')] = trim($item->redirect_link,'/');
    	    }
    	    return $ret;
    	});
		if (isset($listRedirectLink[$value])) {
			if (strpos(trim($listRedirectLink[$value],'/'),'/') !== false) {
				return $value;
			}
			return $listRedirectLink[$value];
		}
        return $value;
    }

}