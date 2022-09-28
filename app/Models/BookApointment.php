<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class BookApointment extends Model
{
    use HasFactory;
    public function service()
    {
        return $this->belongsTo(Services::class,'service_id');
    }
    public function statusBookApointment()
    {
        return $this->belongsTo(StatusBookApointment::class,'status','id');
    }
}
