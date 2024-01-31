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
        Schema::create('escala_interpretaciones', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_escala_interpretacion');
            
            $table->unsignedBigInteger('catalgo_id');
            $table->text('titulo_escala_interpretacion');
            $table->enum('descripcion_escala_interpretacion',['Baja','Media','Alta']);
            $table->unsignedSmallInteger('valor_minimo');
            $table->unsignedSmallInteger('valor_maximo');
            $table->unsignedSmallInteger('valor_interpretacion');
            $table->boolean('activo_escala_interpretacion');
            $table->timestamps();

            $table->foreign('catalgo_id')->references('id')->on('catalogos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escala_interpretaciones');
    }
};
