<?php

namespace App\Models;

use App\Models\User;
use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }
}
