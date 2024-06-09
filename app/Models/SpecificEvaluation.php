<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificEvaluation extends Model
{
    use HasFactory;

    protected $fillable = ['g_av', 'g_ar', 'd_av', 'd_ar', 'groupement_id', 'visite_id'];

    public function groupement()
    {
        return $this->belongsTo(Groupement::class);
    }

    public function visite()
    {
        return $this->belongsTo(Visite::class);
    }
}
