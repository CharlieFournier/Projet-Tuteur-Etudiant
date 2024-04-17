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
        Schema::create('usagers', function (Blueprint $table) {
            $table->id();
            $table->string('matricule', '255')->unique(); 
            $table->string('prenom','30');
            $table->string('nom','30');
            $table->string('email', '255');
            $table->string('password', '255');
            $table->double('nb_heures');
            $table->string('role', '255');
            $table->string('niveau', '255');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usagers');
    }
};
