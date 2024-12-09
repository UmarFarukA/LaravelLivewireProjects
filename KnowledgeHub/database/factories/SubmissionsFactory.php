<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SubmissionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "reviewed_by" => 2,
            "name" => fake()->name(),
            "email" => fake()->email(),
            "phone" => fake()->phoneNumber(),
            "content" => fake()->realText(150),
            "status" => fake()->randomElement([0, 1, 2])
        ];
    }
}
