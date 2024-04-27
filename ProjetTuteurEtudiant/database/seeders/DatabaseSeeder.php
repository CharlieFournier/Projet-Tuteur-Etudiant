<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $this->call(CalendrierJoursSeeder::class);
        $this->call(CalendrierNotesSeeder::class);
        $this->call(CalendrierJourCalendrierNoteSeeder::class);
        $this->call(UserCalendrierJourSeeder::class);
    }
}
