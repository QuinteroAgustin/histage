<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Stage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomUser',
        'prenomUser',
        'emailUser',
        'passwordUser',
        'telephoneUser',
        'mobileUser',
        'titreUser',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'passwordUser',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsTo(Role::class);
    }

    public function stages()
    {
        return $this->belongsToMany(Stage::class);
    }

    //trouver comment faire pour savoir si l'user est un eleve, enseignant ou contact
    //avec une fonction
}
