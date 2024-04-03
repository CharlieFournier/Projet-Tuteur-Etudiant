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
        Schema::create('tuteurs', function (Blueprint $table) {
            $table->id();
            $table->integer('matricule'); 
            $table->string('prenom','30');
            $table->string('nom','30');
            $table->string('email', '255');
            $table->string('pwd', '255');
            //$table->foreignId('grade_id');
            //$table->foreignId('matiere_id');
            $table->double('nb_heures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuteurs');
    }
};
