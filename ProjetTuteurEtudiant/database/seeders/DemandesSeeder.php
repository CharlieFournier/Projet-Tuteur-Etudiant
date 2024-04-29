<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemandesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('demandes')->insert([
            [
                'id' => 1,
                'objet' => "Demandes d'aide en mathématique",
                'commentaire' => 'asdfhuiofhpiowafgiorjhioreiotuiouiog',
                'temps_requis'=> 2,
                'periode'=> '2024-04-29 11:28',
                'matiere_id'=> 1,
                'tuteur_id'=> 1
            ],
            [
                'id' => 2,
                'objet' => "Demandes d'aide en mathématique",
                'commentaire' => 'asdfhuiofhpiowafgiorjhioreiotuiouiog',
                'temps_requis'=> 2,
                'periode'=> '2024-04-29 11:28',
                'matiere_id'=> 1,
                'tuteur_id'=> 2
            ],
            [
                'id' => 3,
                'objet' => "Demandes d'aide en Français",
                'commentaire' => 'asdfhuiofhpiowafgiorjhioreiotuiouiog',
                'temps_requis'=> 2,
                'periode'=> '2024-04-29 11:28',
                'matiere_id'=> 2,
                'tuteur_id'=> 1
            ],
            [
                'id' => 4,
                'objet' => "Demandes d'aide en Français",
                'commentaire' => 'asdfhuiofhpiowafgiorjhioreiotuiouiog',
                'temps_requis'=> 2,
                'periode'=> '2024-04-29 11:28',
                'matiere_id'=> 2,
                'tuteur_id'=> 2
            ]
        ]);
    }
}
