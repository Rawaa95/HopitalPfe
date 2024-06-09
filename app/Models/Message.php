<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function emetteur()
    {
        return $this->belongsTo(\App\Models\User::class,'emetteur_id');
    } 

    public function recepteur()
    {
        return $this->belongsTo(\App\Models\User::class,'recepteur_id');
    } 

}
