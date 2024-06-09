<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function author()
    {
        return $this->belongsTo(\App\Models\User::class,'author_id');
    }
    
    public function parent()
    {
        return $this->belongsTo(\App\Models\User::class,'parent_id');
    } 
    public function hopital()
    {
        return $this->belongsTo(\App\Models\Hopital::class,'hopital_id');
    } 
}
