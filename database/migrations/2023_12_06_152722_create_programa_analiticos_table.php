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
        Schema::create('programa_analiticos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('materia');
            // $table->smallInteger('n_hojas');
            $table->string('carrera')->default('Física');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programa_analiticos');
    }
};
