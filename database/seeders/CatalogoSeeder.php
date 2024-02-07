<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalogo;

class CatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catalogo::create([
            'tipo_estandar_encuesta_id' => 1,
            'codigo_catalogo' => 'IPPJ_01',
            'titulo_catalogo' => 'INVENTARIO DE PREFERENCIAS PROFESIONALES DE JÓVENES',
            'definicion_resultado_catalogo' => 'El Inventario de Preferencias Profesionales de Jóvenes (IPPJ) es una prueba de intereses profesionales que permite identificar las preferencias profesionales de los jóvenes, con el fin de orientarlos en la elección de su carrera profesional.',
            'activo_catalogo' => true,
        ]);
    }
}
