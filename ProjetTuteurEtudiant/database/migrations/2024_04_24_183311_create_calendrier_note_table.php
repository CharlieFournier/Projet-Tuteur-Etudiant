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
        Schema::create('calendriernotes', function (Blueprint $table) {
            $table->id();

            $table->string('LundiP1')->default('')->nullable();
            $table->string('LundiP2')->default('')->nullable();
            $table->string('LundiP3')->default('')->nullable();
            $table->string('LundiP4')->default('')->nullable();
            $table->string('LundiP5')->default('')->nullable();
            $table->string('LundiP6')->default('')->nullable();
            $table->string('LundiP7')->default('')->nullable();
            $table->string('LundiP8')->default('')->nullable();
            $table->string('LundiP9')->default('')->nullable();
            $table->string('LundiP10')->default('')->nullable();

            $table->string('MardiP1')->default('')->nullable();
            $table->string('MardiP2')->default('')->nullable();
            $table->string('MardiP3')->default('')->nullable();
            $table->string('MardiP4')->default('')->nullable();
            $table->string('MardiP5')->default('')->nullable();
            $table->string('MardiP6')->default('')->nullable();
            $table->string('MardiP7')->default('')->nullable();
            $table->string('MardiP8')->default('')->nullable();
            $table->string('MardiP9')->default('')->nullable();
            $table->string('MardiP10')->default('')->nullable();

            $table->string('MercrediP1')->default('')->nullable();
            $table->string('MercrediP2')->default('')->nullable();
            $table->string('MercrediP3')->default('')->nullable();
            $table->string('MercrediP4')->default('')->nullable();
            $table->string('MercrediP5')->default('')->nullable();
            $table->string('MercrediP6')->default('')->nullable();
            $table->string('MercrediP7')->default('')->nullable();
            $table->string('MercrediP8')->default('')->nullable();
            $table->string('MercrediP9')->default('')->nullable();
            $table->string('MercrediP10')->default('')->nullable();

            $table->string('JeudiP1')->default('')->nullable();
            $table->string('JeudiP2')->default('')->nullable();
            $table->string('JeudiP3')->default('')->nullable();
            $table->string('JeudiP4')->default('')->nullable();
            $table->string('JeudiP5')->default('')->nullable();
            $table->string('JeudiP6')->default('')->nullable();
            $table->string('JeudiP7')->default('')->nullable();
            $table->string('JeudiP8')->default('')->nullable();
            $table->string('JeudiP9')->default('')->nullable();
            $table->string('JeudiP10')->default('')->nullable();

            $table->string('VendrediP1')->default('')->nullable();
            $table->string('VendrediP2')->default('')->nullable();
            $table->string('VendrediP3')->default('')->nullable();
            $table->string('VendrediP4')->default('')->nullable();
            $table->string('VendrediP5')->default('')->nullable();
            $table->string('VendrediP6')->default('')->nullable();
            $table->string('VendrediP7')->default('')->nullable();
            $table->string('VendrediP8')->default('')->nullable();
            $table->string('VendrediP9')->default('')->nullable();
            $table->string('VendrediP10')->default('')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendriernotes');
    }
};
