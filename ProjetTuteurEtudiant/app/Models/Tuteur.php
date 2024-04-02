<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    protected $fillable = ['nom','mdp'];
    protected $table = 'test';
    use HasFactory;

}

