<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'contenu',
        'legende',
        'datePost',
        
  
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class,'user_id');
    } 
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    // Convertir la chaîne de caractères en objet Carbon (extension de DateTime)
    public function getDatePostAttribute($value)
    {
        return Carbon::parse($value);
    }
}
