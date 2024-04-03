<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MatieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matieres')->insert([
            [
                'id'=> 1,
                'nom_matiere'=> 'Mathématique'
            ],
            [
                'id'=> 2,
                'nom_matiere'=> 'Français'
            ],
            [
                'id'=> 3,
                'nom_matiere'=> 'Anglais'
            ],
            [
                'id'=> 4,
                'nom_matiere'=> 'Informatique'
            ]
        ]);
    }
}
