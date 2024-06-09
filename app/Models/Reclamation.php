<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class,'user_id');
    } 

    public function recepteur()
    {
        return $this->belongsTo(\App\Models\User::class,'recepteur_id');
    } 
}
