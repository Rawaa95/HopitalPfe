<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'platre',
        'type_platre',
        'ergotherapie',
        'depuis_quand',
        'orthophonie',
        'neuropsychologique',
        'chirurgie',
        'decision_chirurgie',
        'visite_id',
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
