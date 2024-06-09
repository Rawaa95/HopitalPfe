<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation_rachi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'deformation_rachis',
        'commentaire_deformation_rachis',
        'photo',
        'visite_id',
    ];
    public function visite()
    {
        return $this->belongsTo(\App\Models\Visite::class,'visite_id');
    } 
}
