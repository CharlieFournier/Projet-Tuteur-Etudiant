<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $table = 'matieres';
    use HasFactory;

    public function matieres()
    {
        return $this->hasMany(Demande::class, 'matiere_id');
    }
}
