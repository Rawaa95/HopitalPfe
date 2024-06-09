<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation_generale extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'poids',
        'taille',
        'perimetre_cranien',
        'insuffisance_respiratoire',
        'visite_id',
        
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
