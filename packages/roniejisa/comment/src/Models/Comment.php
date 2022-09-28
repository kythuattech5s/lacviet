<?php

namespace Roniejisa\Comment\Models;

use App\Models\Course;
use App\Models\Product;
use App\Models\User;
use FCHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function childs()
    {
        return $this->hasMany(Comment::class)->orderBy('id', 'desc');
    }

    public function rating()
    {
        return $this->hasOne(Rating::class);
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'comment_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function likes()
    {
        return $this->hasMany(LikeComment::class);
    }

    public function getImgs()
    {
        if ($this->imgs == null) {
            return '';
        }
        $imgs = json_decode($this->imgs, true);
        $output = '';
        foreach ($imgs as $img) {
            $imgSrc = FCHelper::eimg($img);
            $output .= "<img src=$imgSrc>";
        }
        return $output;
    }
}
