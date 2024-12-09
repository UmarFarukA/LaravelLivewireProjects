<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class knowledgeSessionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->realText(50),
            'venue' => fake()->address(),
            'date' => fake()->date(),
            'resolution' => fake()->realText(200),
            'duration' => fake()->numberBetween(1, 3),
            'status' => fake()->randomElement([0, 1])
        ];
    }
}
