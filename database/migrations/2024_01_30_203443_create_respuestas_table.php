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
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_respuesta');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('pregunta_id');
            $table->unsignedBigInteger('tipo_respuesta_id');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
            $table->foreign('tipo_respuesta_id')->references('id')->on('tipo_respuestas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestas');
    }
};
