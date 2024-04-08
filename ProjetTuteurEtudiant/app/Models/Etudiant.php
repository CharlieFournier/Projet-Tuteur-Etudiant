<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['id','matricule','prenom','nom','email','pwd'];
    protected $table = 'etudiants';
    use HasFactory;

}

