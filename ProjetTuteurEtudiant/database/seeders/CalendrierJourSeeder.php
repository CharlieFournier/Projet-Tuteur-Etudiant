<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CalendrierJourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('calendrierjour')->insert([
            [
                'id'=> 1,

                'LundiP1'=> true,
                'LundiP2'=> true,
                'LundiP3'=> true,
                'LundiP4'=> true,
                'LundiP5'=> true,
                'LundiP6'=> true,
                'LundiP7'=> true,
                'LundiP8'=> true,
                'LundiP9'=> true,
                'LundiP10'=> true,

                'MardiP1'=> true,
                'MardiP2'=> true,
                'MardiP3'=> true,
                'MardiP4'=> true,
                'MardiP5'=> true,
                'MardiP6'=> true,
                'MardiP7'=> true,
                'MardiP8'=> true,
                'MardiP9'=> true,
                'MardiP10'=> true,

                'MercrediP1'=> true,
                'MercrediP2'=> true,
                'MercrediP3'=> true,
                'MercrediP4'=> true,
                'MercrediP5'=> true,
                'MercrediP6'=> true,
                'MercrediP7'=> true,
                'MercrediP8'=> true,
                'MercrediP9'=> true,
                'MercrediP10'=> true,

                'JeudiP1'=> true,
                'JeudiP2'=> true,
                'JeudiP3'=> true,
                'JeudiP4'=> true,
                'JeudiP5'=> true,
                'JeudiP6'=> true,
                'JeudiP7'=> true,
                'JeudiP8'=> true,
                'JeudiP9'=> true,
                'JeudiP10'=> true,
                
                'VendrediP1'=> true,
                'VendrediP2'=> true,
                'VendrediP3'=> true,
                'VendrediP4'=> true,
                'VendrediP5'=> true,
                'VendrediP6'=> true,
                'VendrediP7'=> true,
                'VendrediP8'=> true,
                'VendrediP9'=> true,
                'VendrediP10'=> true,
            ]
        ]);
    }
}
