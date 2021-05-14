<?php

namespace App\Models;

use App\Models\Eleve;
use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    public function enseignants()
    {
        return $this->belongsToMany(Enseignant::class);
    }

    public function eleves() 
{ 
    return $this->hasMany(Eleve::class); 
}
}
