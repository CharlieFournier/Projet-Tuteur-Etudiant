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
            'user' => 'Meow',
            'mdp' => 'Meow',
            ]
            ]);
    }
}
