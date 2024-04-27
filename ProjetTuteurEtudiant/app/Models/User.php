<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{


    protected $fillable = ['id', 'matricule', 'prenom', 'nom', 'email', 'password', 'nb_heures', 'role', 'niveau'];
    protected $table = 'usagers';
    use HasFactory;
}
