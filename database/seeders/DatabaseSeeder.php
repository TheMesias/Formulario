<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Catalogo;
use App\Models\tipo_estandar_encuestas;
use App\Models\TipoEstandarEncuesta;
use App\Models\Usuario;
use Database\Factories\factory_tipo_estandar_encuestasFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       //TipoEstandarEncuesta::factory()->count(10)->create();
       //Usuario::factory()->count(10)->create();

       $this->call([
        TipoEstandarEncuestaSeeder::class,
        CatalogoSeeder::class,
        EscalaInterpretacionesSeeder::class,
        PreguntasSeeder::class,
        TipoRespuestaSeeder::class,
       ]);

  
        
    }
}
