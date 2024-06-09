<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Injection_toxine extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'injection_toxine',
        'date_injection',
        'type_toxine',
        'dose_totale_injectee',
        'dose_par_muscle',
        'visite_id',
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
