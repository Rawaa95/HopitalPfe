<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examenpodoscopique extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'pied_creux',
        'pied_creux_droit',
        'pied_creux_gauche',
        'pied_plat',
        'pied_plat_droit',
        'pied_plat_gauche',
        'varus_arriere_pied',
        'varus_arriere_pied_droit',
        'varus_arriere_pied_gauche',
        'varus_avant_pied',
        'varus_avant_pied_droit',
        'varus_avant_pied_gauche',
        'valgus_arriere_pied',
        'valgus_arriere_pied_droit',
        'valgus_arriere_pied_gauche',
        'valgus_avant_pied',
        'valgus_avant_pied_droit',
        'valgus_avant_pied_gauche',
        'cassure_medio_pied',
        'cassure_medio_pied_droit',
        'cassure_medio_pied_gauche',
        'photos_podoscopique',
        'visite_id',
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
