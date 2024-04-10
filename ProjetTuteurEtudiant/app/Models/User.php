<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['matricule','prenom', 'nom', 'email', 'pwd', 'nb_heures', 'role', 'niveau'];
    protected $table = 'users';
    use HasFactory;
}
