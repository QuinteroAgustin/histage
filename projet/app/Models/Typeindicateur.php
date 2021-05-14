<?php

namespace App\Models;

use App\Models\Indicateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Typeindicateur extends Model
{
    use HasFactory;

    public function indicateurs() 
{ 
    return $this->hasMany(Indicateur::class); 
}
}
