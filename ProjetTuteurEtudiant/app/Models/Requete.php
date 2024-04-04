<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requete extends Model
{
    protected $fillable = ['a'];
    protected $table = 'test';
    use HasFactory;

}

