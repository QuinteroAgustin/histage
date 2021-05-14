<?php

namespace App\Models;

use App\Models\Stage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anneescolaire extends Model
{
    use HasFactory;

    public function stages() 
    { 
        return $this->hasMany(Stage::class); 
    }
}
