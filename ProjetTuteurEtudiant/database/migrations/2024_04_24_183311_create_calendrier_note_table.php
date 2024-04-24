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
        Schema::create('calendriernote', function (Blueprint $table) {
            $table->id();

            $table->string('LundiP1');
            $table->string('LundiP2');
            $table->string('LundiP3');
            $table->string('LundiP4');
            $table->string('LundiP5');
            $table->string('LundiP6');
            $table->string('LundiP7');
            $table->string('LundiP8');
            $table->string('LundiP9');
            $table->string('LundiP10');

            $table->string('MardiP1');
            $table->string('MardiP2');
            $table->string('MardiP3');
            $table->string('MardiP4');
            $table->string('MardiP5');
            $table->string('MardiP6');
            $table->string('MardiP7');
            $table->string('MardiP8');
            $table->string('MardiP9');
            $table->string('MardiP10');

            $table->string('MercrediP1');
            $table->string('MercrediP2');
            $table->string('MercrediP3');
            $table->string('MercrediP4');
            $table->string('MercrediP5');
            $table->string('MercrediP6');
            $table->string('MercrediP7');
            $table->string('MercrediP8');
            $table->string('MercrediP9');
            $table->string('MercrediP10');

            $table->string('JeudiP1');
            $table->string('JeudiP2');
            $table->string('JeudiP3');
            $table->string('JeudiP4');
            $table->string('JeudiP5');
            $table->string('JeudiP6');
            $table->string('JeudiP7');
            $table->string('JeudiP8');
            $table->string('JeudiP9');
            $table->string('JeudiP10');

            $table->string('VendrediP1');
            $table->string('VendrediP2');
            $table->string('VendrediP3');
            $table->string('VendrediP4');
            $table->string('VendrediP5');
            $table->string('VendrediP6');
            $table->string('VendrediP7');
            $table->string('VendrediP8');
            $table->string('VendrediP9');
            $table->string('VendrediP10');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendrierNote');
    }
};
