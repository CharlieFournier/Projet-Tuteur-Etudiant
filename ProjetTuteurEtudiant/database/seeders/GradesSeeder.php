<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grades')->insert([
            [
                'id'=> 1,
                'titre_grade'=> 'Enseignant'
            ],
            [
                'id'=> 2,
                'titre_grade'=> 'Étudiant 2e année'
            ],
            [
                'id'=> 3,
                'titre_grade'=> 'Étudiant 1e année'
            ]
        ]);
    }
}
