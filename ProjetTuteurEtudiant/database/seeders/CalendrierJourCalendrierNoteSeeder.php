<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalendrierJourCalendrierNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Jours_Notes')->insert([ 
            [
                'id' => 1,
                'CalendrierJour_id' => 1,
                'CalendrierNote_id' => 1
            ],
            [
                'id' => 2,
                'CalendrierJour_id' => 2,
                'CalendrierNote_id' => 2
            ],
            [
                'id' => 3,
                'CalendrierJour_id' => 3,
                'CalendrierNote_id' => 3
            ],
            [
                'id' => 4,
                'CalendrierJour_id' => 4,
                'CalendrierNote_id' => 4
            ],
            [
                'id' => 5,
                'CalendrierJour_id' => 5,
                'CalendrierNote_id' => 5
            ],
            [
                'id' => 6,
                'CalendrierJour_id' => 6,
                'CalendrierNote_id' => 6
            ],            [
                'id' => 7,
                'CalendrierJour_id' => 7,
                'CalendrierNote_id' => 7
            ],            [
                'id' => 8,
                'CalendrierJour_id' => 8,
                'CalendrierNote_id' => 8
            ],
        ]);
    }
}
