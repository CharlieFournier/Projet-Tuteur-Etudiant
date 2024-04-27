<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendrierJour extends Model // value true or false dans le tableau de disponibilité et si true -> afficher le commentaire, si false afficher la card en card-header
{
    protected $fillable = ['id','LundiP1','LundiP2','LundiP3','LundiP4','LundiP5','LundiP6','LundiP7','LundiP8','LundiP9','LundiP10',
                                'MardiP1','MardiP2','MardiP3','MardiP4','MardiP5','MardiP6','MardiP7','MardiP8','MardiP9','MardiP10',
                                'MercrediP1','MercrediP2','MercrediP3','MercrediP4','MercrediP5','MercrediP6','MercrediP7','MercrediP8','MercrediP9','MercrediP10',
                                'JeudiP1','JeudiP2','JeudiP3','JeudiP4','JeudiP5','JeudiP6','JeudiP7','JeudiP8','JeudiP9','JeudiP10',
                                'VendrediP1','VendrediP2','VendrediP3','VendrediP4','VendrediP5','VendrediP6','VendrediP7','VendrediP8','VendrediP9','VendrediP10',
                            ];
    protected $table = 'Calendrierjours';
    use HasFactory;

    function jours(){
        return $this -> belongsTo(User::class, 'usagers_jours', 'Usager_id', 'Calendrierjour_id');
    }

    function notes(){
        return $this -> hasOne(CalendrierNote::class);
    }
}
