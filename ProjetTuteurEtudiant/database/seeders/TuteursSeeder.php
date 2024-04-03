<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

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
                'matricule' => 1234567,
                'prenom' => 'Meow',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'pwd'=> 'meow1234',
                'grade_id'=> 1,
                'matiere_id'=> 1,
                'nb_heures'=> 15
            ],
            [
                'id' => 2,
                'matricule' => 7894562,
                'prenom' => 'Orange',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'pwd'=> 'meow1234',
                'grade_id'=> 2,
                'matiere_id'=> 2,
                'nb_heures'=> 5
            ],
            [
                'id' => 3,
                'matricule' => 6543217,
                'prenom' => 'Pommes',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'pwd'=> 'meow1234',
                'grade_id'=> 3,
                'matiere_id'=> 3,
                'nb_heures'=> 12
            ],
            [
                'id' => 4,
                'matricule' => 6543217,
                'prenom' => 'Pommes',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'pwd'=> 'meow1234',
                'grade_id'=> 1,
                'matiere_id'=> 4,
                'nb_heures'=> 12
            ]
        ]);
    }
}
