<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doleances_actuelles extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'douleur',
        'douleur_localisation',
        'douleur_causes',
        'developpement_psychomoteur',
        'sourire_reponse',
        'tenue_tete',
        'marche',
        'proprete',
        'station_assise',
        'station_debout',
        'langage',
        'visite_id',
        'dossier_id',
        ];
        public function visite()
        {
            return $this->belongsTo(\App\Models\Visite::class,'visite_id');
        } 
}
