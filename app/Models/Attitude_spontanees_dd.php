<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attitude_spontanees_dd extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'attitude_spontanee_dd_description',
        'attitude_spontanee_dd_video',
        'visite_id',
         ];
        public function visite()
        {
            return $this->belongsTo(\App\Models\Visite::class,'visite_id');
        } 
}
