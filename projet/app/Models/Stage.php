<?php

namespace App\Models;

use App\Models\User;
use App\Models\Entreprise;
use App\Models\Indicateur;
use App\Models\Anneescolaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stage extends Model
{
    use HasFactory;

    public function entreprise()
    { 
        return $this->belongsTo(Entreprise::class); 
    }   

    public function anneescolaire()
    { 
        return $this->belongsTo(Anneescolaire::class); 
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function indicateurs()
    {
        return $this->belongsToMany(Indicateur::class);
    }
}
