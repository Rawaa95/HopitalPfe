<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hopital extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'hopitaux';

    public function user()
    {
        return $this->hasMany(\App\Models\User::class);
    }
    
    public function ville()
    {
        return $this->belongsTo(\App\Models\Ville::class,'ville_id');
    } 
}
