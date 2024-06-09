<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;


    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class,'post_id');
    } 

    public function getDateAttribute($value)
    {
        return Carbon::parse($value);
    }
}
