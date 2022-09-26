<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;
class BannerGdn extends BaseModel
{
	use HasFactory;
	public function buidLink()
	{
		return $this->link != '' ? $this->link:'javascript:void(0)';
	}
}