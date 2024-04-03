<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TuteursMatieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tuteursMatieres')->insert([
            [
                'id'=> 1,
                'tuteur_id'=> 1,
                'matiere_id'=> 1,
            ],
            [
                'id'=> 2,
                'tuteur_id'=> 1,
                'matiere_id'=> 2,
            ],
            [
                'id'=> 3,
                'tuteur_id'=> 2,
                'matiere_id'=> 3,
            ],
            [
                'id'=> 4,
                'tuteur_id'=> 2,
                'matiere_id'=> 4,
            ]
        ]);
    }
}
