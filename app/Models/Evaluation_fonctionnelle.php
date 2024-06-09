<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation_fonctionnelle extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'equilibre_assis_bord_table',
        'equilibre_assis_sol',
        'equilibre_debout_bipodal',
        'equilibre_unipodal',
        'temps_droite',
        'temps_gauche',
        'cms_image_description',
        'gmfcs_image_description',
        'gillette_image_description',
        'visite_id',
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
