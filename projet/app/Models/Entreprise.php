<?php

namespace App\Models;

use App\Models\Stage;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;

    public function contacts() 
    { 
        return $this->hasMany(Contact::class); 
    }

    public function stages() 
    { 
        return $this->hasMany(Stage::class); 
    }
}
