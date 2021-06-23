<?php

namespace App\Models;

use App\Models\User;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eleve extends Model
{
    use HasFactory;

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id')->orderBy('nomUser', 'DESC');
    }
}
