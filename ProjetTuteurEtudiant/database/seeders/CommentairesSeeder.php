<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('commentaires')->insert([
            [
                'id'=> 1,
                'prenom'=> 'Marine',
                'nom'=> 'Le pen',
                'commentaire'=> 'PlaceHolder commentaire: meow meow!'
            ],
            [
                'id'=> 2,
                'prenom'=> 'Marine',
                'nom'=> 'Le stylo',
                'commentaire'=> 'PlaceHolder commentaire: woof woof!'
            ],
            [
                'id'=> 3,
                'prenom'=> 'Pierre',
                'nom'=> 'Laroche',
                'commentaire'=> 'PlaceHolder commentaire: Rock Solid!'
            ]
            ]);
    }
}
