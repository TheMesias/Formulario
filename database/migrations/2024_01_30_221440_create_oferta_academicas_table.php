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
        Schema::create('oferta_academicas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_oferta_academica');
            $table->unsignedBigInteger('resultado_encuesta_id');
            $table->string('nombre_carrera');
            $table->text('descripcion_oferta_academica');
            $table->boolean('existencia_institucion');
            $table->boolean('activo_oferta_academica');
            $table->timestamps();

            $table->foreign('resultado_encuesta_id')->references('id')->on('resultado_encuestas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oferta_academicas');
    }
};
