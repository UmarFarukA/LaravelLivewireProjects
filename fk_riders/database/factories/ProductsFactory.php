<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'model' => fake()->titleMale(),
            'description' => fake()->paragraph(),
            'features' => fake()->paragraph(2),
            'condition' => fake()->randomElement([0,1]),
            'status' => fake()->randomElement([0,2]),
            'price' => fake()->randomFloat(min:250000.00, max:850000.00),
            'photo' => fake()->imageUrl(),
            'quantity' => fake()->randomElement([1,9]),
            'min_deposit' => fake()->randomFloat(min:75000.00),
            'max_duration' => fake()->randomElement([3,12])
        ];
    }
}
