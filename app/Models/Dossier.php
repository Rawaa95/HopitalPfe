<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'patient_id',
        'medecin_id',
        'num_dossier',
        'num_facultatif',
        'couverture_sociale',
        'profession_pere',
        'profession_mere',
        'mode_habitat_1',
        'mode_habitat_2',
        'scolariser',
        'niveau_scolaire',
        'rendement_scolaire',
        'description',
  
    ];
    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class,'patient_id');
    } 
    public function medecin()
    {
        return $this->belongsTo(\App\Models\User::class,'medecin_id');
    } 
    public function secretaire()
    {
        return $this->belongsTo(\App\Models\User::class,'secretaire_id');
    }


    public function visite()
    {
        return $this->hasMany(\App\Models\Visite::class);
    }
    
}
