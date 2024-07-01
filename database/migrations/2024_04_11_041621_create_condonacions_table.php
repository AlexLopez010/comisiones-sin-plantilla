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
        Schema::create('condonacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('codigo');
            $table->string('correo');
            $table->string('telefono');
            $table->string('carrera');
            $table->string('primeringreso');
            $table->string('situacion');
            $table->string('justificacion');
            $table->string('ordendepago');
            $table->string('adeudo');
            $table->string('comprobante');
            $table->string('imss');
            $table->string('fm2fm3');
            $table->string('porcentaje');
            $table->string('estatus')->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condonacions');
    }
};