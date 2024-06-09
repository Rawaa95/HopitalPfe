<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    use HasFactory;

    protected $fillable = [

        'id',
        'date',
        'status',
        'note',
        'dossier_id',
        

    ];


    public function emetteur()
    {
        return $this->belongsTo(\App\Models\User::class,'emetteur_id');
    }

    public function recepteur()
    {
        return $this->belongsTo(\App\Models\User::class,'recepteur_id');
    }
    public function dossier()
    {
        return $this->belongsTo(\App\Models\dossier::class,'dossier_id');
    }
}

