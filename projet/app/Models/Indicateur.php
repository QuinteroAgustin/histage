<?php

namespace App\Models;

use App\Models\Stage;
use App\Models\Typeindicateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Indicateur extends Model
{
    use HasFactory;

    public function typeindicateur()
    { 
        return $this->belongsTo(Typeindicateur::class); 
    }

    public function stages()
    {
        return $this->belongsToMany(Stage::class);
    }
}
