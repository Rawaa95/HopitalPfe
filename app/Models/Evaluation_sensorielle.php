<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation_sensorielle extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'evaluation_sensorielle',
        'autres_description_text',
        'troubles_audition',
        'dyspraxie_buccofaciale',
        'troubles_deglutition',
        'autre_troubles_deglutition',
        'trouble_langage',
        'description_langage',
        'troubles_fonctions',
        'type_fonctions',
        'bilan_neuro',
        'cr_bilan',
        'syncinesies',
        'troubles_vesico_sphincteriens',
        'troubles_anorectaux',
        'acquisition_proprete_anale',
        'troubles_urinaires',
        'visite_id',
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
