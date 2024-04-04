<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    protected $fillable = ['matricule','prenom', 'nom', 'email', 'pwd', 'nb_heures'];
    protected $table = 'tuteurs';
    use HasFactory;

}

