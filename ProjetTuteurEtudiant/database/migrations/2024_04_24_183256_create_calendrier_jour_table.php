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
        Schema::create('calendrierjours', function (Blueprint $table) {
            $table->id();

            $table->boolean('LundiP1')->default(false)->nullable();
            $table->boolean('LundiP2')->default(false)->nullable();
            $table->boolean('LundiP3')->default(false)->nullable();
            $table->boolean('LundiP4')->default(false)->nullable();
            $table->boolean('LundiP5')->default(false)->nullable();
            $table->boolean('LundiP6')->default(false)->nullable();
            $table->boolean('LundiP7')->default(false)->nullable();
            $table->boolean('LundiP8')->default(false)->nullable();
            $table->boolean('LundiP9')->default(false)->nullable();
            $table->boolean('LundiP10')->default(false)->nullable();

            $table->boolean('MardiP1')->default(false)->nullable();
            $table->boolean('MardiP2')->default(false)->nullable();
            $table->boolean('MardiP3')->default(false)->nullable();
            $table->boolean('MardiP4')->default(false)->nullable();
            $table->boolean('MardiP5')->default(false)->nullable();
            $table->boolean('MardiP6')->default(false)->nullable();
            $table->boolean('MardiP7')->default(false)->nullable();
            $table->boolean('MardiP8')->default(false)->nullable();
            $table->boolean('MardiP9')->default(false)->nullable();
            $table->boolean('MardiP10')->default(false)->nullable();

            $table->boolean('MercrediP1')->default(false)->nullable();
            $table->boolean('MercrediP2')->default(false)->nullable();
            $table->boolean('MercrediP3')->default(false)->nullable();
            $table->boolean('MercrediP4')->default(false)->nullable();
            $table->boolean('MercrediP5')->default(false)->nullable();
            $table->boolean('MercrediP6')->default(false)->nullable();
            $table->boolean('MercrediP7')->default(false)->nullable();
            $table->boolean('MercrediP8')->default(false)->nullable();
            $table->boolean('MercrediP9')->default(false)->nullable();
            $table->boolean('MercrediP10')->default(false)->nullable();

            $table->boolean('JeudiP1')->default(false)->nullable();
            $table->boolean('JeudiP2')->default(false)->nullable();
            $table->boolean('JeudiP3')->default(false)->nullable();
            $table->boolean('JeudiP4')->default(false)->nullable();
            $table->boolean('JeudiP5')->default(false)->nullable();
            $table->boolean('JeudiP6')->default(false)->nullable();
            $table->boolean('JeudiP7')->default(false)->nullable();
            $table->boolean('JeudiP8')->default(false)->nullable();
            $table->boolean('JeudiP9')->default(false)->nullable();
            $table->boolean('JeudiP10')->default(false)->nullable();

            $table->boolean('VendrediP1')->default(false)->nullable();
            $table->boolean('VendrediP2')->default(false)->nullable();
            $table->boolean('VendrediP3')->default(false)->nullable();
            $table->boolean('VendrediP4')->default(false)->nullable();
            $table->boolean('VendrediP5')->default(false)->nullable();
            $table->boolean('VendrediP6')->default(false)->nullable();
            $table->boolean('VendrediP7')->default(false)->nullable();
            $table->boolean('VendrediP8')->default(false)->nullable();
            $table->boolean('VendrediP9')->default(false)->nullable();
            $table->boolean('VendrediP10')->default(false)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendrierJours');
    }
};
