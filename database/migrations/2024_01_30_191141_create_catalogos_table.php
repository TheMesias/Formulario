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
        Schema::create('catalogos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_estandar_encuesta_id');
            $table->string('codigo_catalogo');
            $table->string('titulo_catalogo');
            $table->text('definicion_resultado_catalogo');
            $table->boolean('activo_catalogo');
            $table->timestamps();

            $table->foreign('tipo_estandar_encuesta_id')->references('id')->on('tipo_estandar_encuestas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogos');
    }
};
