<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attitude_spontanee extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'attitude_sp',
        'motricite_dd_dv_ms_mi',
        'reactions_posturales',
        'suspension_ventrale',
        'suspension_dorsale',
        'suspension_laterale',
        'reaction_balancier_MI',
        'reaction_parachute_anterieur',
        'reaction_parachute_posterieur',
        'reaction_parachute_lateral',
        'attitude_sp_shema',
        'visite_id',
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
