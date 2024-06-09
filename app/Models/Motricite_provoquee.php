<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motricite_provoquee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'agrippement',
        'retournement_mi',
        'retournement_tete_ms',
        'redressement_membres_superieurs',
        'schema_reptation',
        'tenu_assis',
        'tire_assis',
        'assis_tailleur',
        'sur_chaise',
        'passage_assis_debout',
        'station_verticale',
        'visite_id',
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
