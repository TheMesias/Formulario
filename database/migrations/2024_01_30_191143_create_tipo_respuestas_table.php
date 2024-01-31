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
        Schema::create('tipo_respuestas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_tipo_respuesta');
            $table->text('titulo_tipo_respuesta');
            $table->unsignedSmallInteger('valor_tipo_respuesta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_respuestas');
    }
};
