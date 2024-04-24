<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calendrierjour', function (Blueprint $table) {
            $table->id();

            $table->boolean('LundiP1');
            $table->boolean('LundiP2');
            $table->boolean('LundiP3');
            $table->boolean('LundiP4');
            $table->boolean('LundiP5');
            $table->boolean('LundiP6');
            $table->boolean('LundiP7');
            $table->boolean('LundiP8');
            $table->boolean('LundiP9');
            $table->boolean('LundiP10');

            $table->boolean('MardiP1');
            $table->boolean('MardiP2');
            $table->boolean('MardiP3');
            $table->boolean('MardiP4');
            $table->boolean('MardiP5');
            $table->boolean('MardiP6');
            $table->boolean('MardiP7');
            $table->boolean('MardiP8');
            $table->boolean('MardiP9');
            $table->boolean('MardiP10');

            $table->boolean('MercrediP1');
            $table->boolean('MercrediP2');
            $table->boolean('MercrediP3');
            $table->boolean('MercrediP4');
            $table->boolean('MercrediP5');
            $table->boolean('MercrediP6');
            $table->boolean('MercrediP7');
            $table->boolean('MercrediP8');
            $table->boolean('MercrediP9');
            $table->boolean('MercrediP10');

            $table->boolean('JeudiP1');
            $table->boolean('JeudiP2');
            $table->boolean('JeudiP3');
            $table->boolean('JeudiP4');
            $table->boolean('JeudiP5');
            $table->boolean('JeudiP6');
            $table->boolean('JeudiP7');
            $table->boolean('JeudiP8');
            $table->boolean('JeudiP9');
            $table->boolean('JeudiP10');

            $table->boolean('VendrediP1');
            $table->boolean('VendrediP2');
            $table->boolean('VendrediP3');
            $table->boolean('VendrediP4');
            $table->boolean('VendrediP5');
            $table->boolean('VendrediP6');
            $table->boolean('VendrediP7');
            $table->boolean('VendrediP8');
            $table->boolean('VendrediP9');
            $table->boolean('VendrediP10');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendrierJour');
    }
};
