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
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('codigo');
            $table->string('correo');
            $table->string('telefono');
            $table->string('ciclo');
            $table->string('carrera');
            $table->string('avance');
            $table->string('faltante');
            $table->string('incurrido');
            $table->string('materias');
            $table->string('reprobada35');
            $table->string('reprobada33');
            $table->string('motivo');
            $table->string('documento');
            $table->string('explicacion');
            $table->string('carta');
            $table->string('estatus')->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
