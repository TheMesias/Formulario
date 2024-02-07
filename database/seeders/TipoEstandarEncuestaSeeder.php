<?php

namespace Database\Seeders;

use App\Models\TipoEstandarEncuesta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoEstandarEncuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //TipoEstandarEncuesta::factory()->count(50)->create();
        TipoEstandarEncuesta::create([
            'codigo_tipo_estandar_encuesta' => 1,
            'nombre_tipo_estandar_encuesta' => 'Inventario de preferencias profesionales de jovenes',
            'activo_tipo_estandar_encuesta' => true
        ]);
    }
}
