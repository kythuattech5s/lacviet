<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
class Equipment extends BaseModel
{
	use HasFactory;
	protected $table = 'equipments';
}