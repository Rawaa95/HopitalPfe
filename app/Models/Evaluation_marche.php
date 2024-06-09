<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation_marche extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',    
        'evaluation_marche',
        'description_marche',
        'vitesse_marche',
        'video_marche',
        'visite_id',
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
