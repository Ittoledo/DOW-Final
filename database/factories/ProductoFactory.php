<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(2),
            'descripcion' => $this->faker->sentence(20),
            'price' => $this->faker->numberBetween(100, 2000),
        ];
    }
}
