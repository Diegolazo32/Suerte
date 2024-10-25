<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfesorMateria>
 */
class ProfesorMateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'profesor' => $this->faker->numberBetween(1, 10),
            'materia' => $this->faker->numberBetween(1, 10),
        ];
    }
}