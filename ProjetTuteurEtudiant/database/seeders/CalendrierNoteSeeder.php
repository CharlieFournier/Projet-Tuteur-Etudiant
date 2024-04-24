<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CalendrierNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('calendriernote')->insert([
            [
                'id'=> 1,

                'LundiP1'=> 'cours',
                'LundiP2'=> 'cours',
                'LundiP3'=> 'cours',
                'LundiP4'=> 'cours',
                'LundiP5'=> 'cours',
                'LundiP6'=> 'cours',
                'LundiP7'=> 'cours',
                'LundiP8'=> 'cours',
                'LundiP9'=> 'cours',
                'LundiP10'=> 'cours',

                'MardiP1'=> 'cours',
                'MardiP2'=> 'cours',
                'MardiP3'=> 'cours',
                'MardiP4'=> 'cours',
                'MardiP5'=> 'cours',
                'MardiP6'=> 'cours',
                'MardiP7'=> 'cours',
                'MardiP8'=> 'cours',
                'MardiP9'=> 'cours',
                'MardiP10'=> 'cours',

                'MercrediP1'=> 'cours',
                'MercrediP2'=> 'cours',
                'MercrediP3'=> 'cours',
                'MercrediP4'=> 'cours',
                'MercrediP5'=> 'cours',
                'MercrediP6'=> 'cours',
                'MercrediP7'=> 'cours',
                'MercrediP8'=> 'cours',
                'MercrediP9'=> 'cours',
                'MercrediP10'=> 'cours',

                'JeudiP1'=> 'cours',
                'JeudiP2'=> 'cours',
                'JeudiP3'=> 'cours',
                'JeudiP4'=> 'cours',
                'JeudiP5'=> 'cours',
                'JeudiP6'=> 'cours',
                'JeudiP7'=> 'cours',
                'JeudiP8'=> 'cours',
                'JeudiP9'=> 'cours',
                'JeudiP10'=> 'cours',
                
                'VendrediP1'=> 'cours',
                'VendrediP2'=> 'cours',
                'VendrediP3'=> 'cours',
                'VendrediP4'=> 'cours',
                'VendrediP5'=> 'cours',
                'VendrediP6'=> 'cours',
                'VendrediP7'=> 'cours',
                'VendrediP8'=> 'cours',
                'VendrediP9'=> 'cours',
                'VendrediP10'=> 'cours',
            ]
        ]);
    }
}
