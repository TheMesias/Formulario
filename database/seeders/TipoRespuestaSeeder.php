<?php

namespace Database\Seeders;

use App\Models\TipoRespuesta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TipoRespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fichaclasificacion = ['Totalmente en desacuerdo', 'En desacuerdo', ' Es difícil decidir', 'De acuerdo', ' Totalmente de acuerdo'];

        for($i = 1; $i <= 5; $i++){
            $respuesta = new TipoRespuesta();
            $respuesta->codigo_tipo_respuesta = $i;
            $respuesta->titulo_tipo_respuesta = $fichaclasificacion[$i-1]; 
            $respuesta->valor_tipo_respuesta = $i;
            $respuesta->save();
        }
    }
}
