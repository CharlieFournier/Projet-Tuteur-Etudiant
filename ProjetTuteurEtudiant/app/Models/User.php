<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $fillable = ['matricule','prenom', 'nom', 'email', 'pwd', 'nb_heures', 'role', 'niveau'];
    protected $table = 'usagers';
    use HasFactory;
}
