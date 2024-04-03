<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtudiantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('etudiants')->insert([
            [
                'id' => 1,
                'matricule' => 1234567,
                'prenom' => 'Bananes',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'pwd'=> 'meow1234',
                'heures_demander'=> 35
            ],
            [
                'id' => 2,
                'matricule' => 1234567,
                'prenom' => 'Framboise',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'pwd'=> 'meow1234',
                'heures_demander'=> 20
            ],
            [
                'id' => 3,
                'matricule' => 1234567,
                'prenom' => 'Mangues',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'pwd'=> 'meow1234',
                'heures_demander'=> 35
            ]
        ]);
    }
}
