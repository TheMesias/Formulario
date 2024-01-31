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
        Schema::create('tipo_estandar_encuestas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_tipo_estandar_encuesta');
            $table->text('nombre_tipo_estandar_encuesta');
            $table->boolean('activo_tipo_estandar_encuesta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_estandar_encuestas');
    }
};
