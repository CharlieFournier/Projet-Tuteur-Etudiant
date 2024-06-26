<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// mettre dans le terminal si erreur sanctum composer require laravel/sanctum

class Usager extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string[]>
     */
    protected $fillable = [
        'matricule',
        'prenom',
        'nom',
        'email',
        'password',
        'nb_heures',
        'role',
        'niveau',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string[]>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
