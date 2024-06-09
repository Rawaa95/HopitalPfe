<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kinesitherapie extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'kinesitherapie',
        'seances_par_semaine',
        'autoreeducation',
        'apprentissage_fait',
        'visite_id',
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
