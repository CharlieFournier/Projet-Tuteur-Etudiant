<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = ['id','objet','commentaire','temps_requis','periode','matiere_id','tuteur_id'];
    protected $table = 'demandes';
    use HasFactory;

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
}
