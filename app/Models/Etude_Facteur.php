<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etude_Facteur extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [ 
        'id',      
    'anomalies',
    'parole',
    'concentration',
    'bruit',
    'toucher',
    'effort',
    'visite_id',
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
