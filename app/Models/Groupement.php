<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Groupement extends Model
{
    use HasFactory;

    protected $fillable = ['designation', 'use', 'parent_id'];

    public function children()
    {
        return $this->hasMany(Groupement::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Groupement::class, 'parent_id');
    }

    public function specificEvaluations()
    {
        return $this->hasMany(SpecificEvaluation::class);
    }


}
