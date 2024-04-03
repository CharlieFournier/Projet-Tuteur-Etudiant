<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TuteursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tuteurs')->insert([
            [
            'id' => 1,
            'matricule' => '2052524',
            'prenom' => 'Meow',
            'nom' => 'Fournier',
            'email' => 'Meow@Meow.com',
            'mdp' => 'Meow',
            'grade'=> 'Enseignant',
            'matiere' => 'Mathématiques',
            ]
            ]);
    }
}
