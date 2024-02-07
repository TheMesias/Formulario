<?php

namespace Database\Seeders;

use App\Models\EscalaInterpretacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EscalaInterpretacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EscalaInterpretacion::create([
            'codigo_escala_interpretacion' => 'E_1-5',
            'catalgo_id' => 1,
            'titulo_escala_interpretacion' => 'IIPJ - Escala de Interpretación',
            'descripcion_escala_interpretacion' => 'Baja',
            'valor_minimo' => 1,
            'valor_maximo' => 5,
            'valor_interpretacion' => 3,
            'activo_escala_interpretacion' => 1,
        ]);
    }
}
