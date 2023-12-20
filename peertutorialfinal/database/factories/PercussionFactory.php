<?php

namespace Database\Factories;
use App\Models\Percussion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Percussion>
 */
class PercussionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => fake()->word(),
            'model' => fake()->word(),
            'description' => fake()->word(),
            'price' => fake()->numberBetween(100.00, 5000.00),
        ];
    }
}
