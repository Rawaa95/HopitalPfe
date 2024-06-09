<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appareillage extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'corset_siege',
        'verticalisateur',
        'acp',
        'fr',
        'deambulateur',
        'attelle_tamarak_marche',
        'attelle_anti_talus',
        'corset_garchoix',
        'orthese_main',
        'orthese_plantaire',
        'type_orthese_plantaire',
        'chaussures',
        'remarque',
        'visite_id',
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
