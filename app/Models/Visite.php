<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Spatie\Sluggable\HasSlug;
//use Spatie\Sluggable\SlugOptions;

class Visite extends Model

{
    use HasFactory;
   //, HasSlug;
    public $timestamps = false;
    protected $fillable = [

        'id',
        'dossier_id',
        'titre',
        'type',
        'date',
       // 'slug',

    ];




    /**
        *public function getSlugOptions(): SlugOptions
   * {
        *return SlugOptions::create()

          *  ->generateSlugsFrom('titre')
           * ->saveSlugsTo('slug');
   * }

  *  public function getRouteKeyName(): string
   * {
  *      return 'slug';
  *  }

    */


    public function dossier()
    {
        return $this->belongsTo(\App\Models\Dossier::class,'dossier_id');
    }

    public function ordonnance()
    {
        return $this->hasMany(\App\Models\Ordonnance::class);
    } 
    
}

