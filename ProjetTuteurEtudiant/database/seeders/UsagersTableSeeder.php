<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;

class UsagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'id' => 1,
                'matricule' => '1234567',
                'prenom' => 'Bananes',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'password'=> Hash::make('meow1234'),
                'nb_heures'=> 35,
                'role' => 'etudiant',
                'niveau' => '1er annee',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'matricule' => '8675439',
                'prenom' => 'Framboise',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'password'=> Hash::make('meow1234'),
                'nb_heures'=> 20,
                'role' => 'etudiant',
                'niveau' => '1er annee',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'matricule' => '8693922',
                'prenom' => 'Mangues',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'password'=> Hash::make('meow1234'),
                'nb_heures'=> 35,
                'role' => 'etudiant',
                'niveau' => '1er annee',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'matricule' => '2052524',
                'prenom' => 'Meow',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'password'=> Hash::make('meow1234'),
                'nb_heures'=> 15,
                'role' => 'tuteur',
                'niveau' => 'enseignant',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'matricule' => '7894562',
                'prenom' => 'Orange',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'password'=> Hash::make('meow1234'),
                'nb_heures'=> 5,
                'role' => 'tuteur',
                'niveau' => 'enseignant',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'matricule' => '6543217',
                'prenom' => 'Grenade',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'password'=> Hash::make('meow1234'),
                'nb_heures'=> 12,
                'role' => 'tuteur',
                'niveau' => 'enseignant',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'matricule' => '6547227',
                'prenom' => 'Pommes',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'password'=> Hash::make('meow1234'),
                'nb_heures'=> 12,
                'role' => 'tuteur',
                'niveau' => 'enseignant',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'matricule' => '6548347',
                'prenom' => 'Bleuet',
                'nom'=> 'Meow',
                'email'=> 'meowmeow@hotmail.com',
                'password'=> Hash::make('meow1234'),
                'nb_heures'=> 12,
                'role' => 'tuteur',
                'niveau' => 'enseignant',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
