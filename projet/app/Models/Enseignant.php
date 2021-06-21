<?php

namespace App\Models;

use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    use HasFactory;

    public function sections()
    {
        return $this->belongsToMany(Section::class)->withPivot('isRs', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
