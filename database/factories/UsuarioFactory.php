<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'fecha_nacimiento' => $this->faker->date(),
            'numero_telefono' => $this->faker->phoneNumber(),
            'correo_electronico' => $this->faker->unique()->text(),
            'verificacion_correo_electronico' => $this->faker->dateTime(),
            'contrasenia' => $this->faker->password(),
            'contrasenia_confirmacion' => $this->faker->password(),
            'remember_token' => $this->faker->text($maxNbChars = 100),
        ];
    }
}
