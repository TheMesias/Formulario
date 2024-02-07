<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TipoEstandarEncuesta>
 */
class TipoEstandarEncuestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo_tipo_estandar_encuesta' => $this->faker->text(25),
            'nombre_tipo_estandar_encuesta' => $this->faker->text(25),
            'activo_tipo_estandar_encuesta' => $this->faker->boolean,
        ];
    }
}
