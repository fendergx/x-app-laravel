<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_proyecto' => $this->faker->name(),
            'fuente_fondos' => $this->faker->name(),
            'monto_planificado' => $this->faker->randomDigit(),
            'monto_patrocinado' => $this->faker->randomDigit(),
            'monto_fondos_propios' => $this->faker->randomDigit(),
        ];
    }
}
