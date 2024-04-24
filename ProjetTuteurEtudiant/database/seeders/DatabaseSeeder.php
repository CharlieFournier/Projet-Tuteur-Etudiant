<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /*
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersSeeder::class);
        $this->call(TuteursSeeder::class);
        $this->call(EtudiantsSeeder::class);
        $this->call(GradesSeeder::class);
        $this->call(MatieresSeeder::class);
        $this->call(TuteursMatieresSeeder::class);
        $this->call(CalendrierJourSeeder::class);
        $this->call(CalendrierNoteSeeder::class);
    }
}
