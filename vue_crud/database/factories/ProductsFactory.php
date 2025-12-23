<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
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
            'name' => fake()->sentence(6),
            'description' => fake()->sentence(25),
            'price' => fake()->randomDigit(),
            'quantity' => fake()->randomNumber(),
            'product_image' => fake()->imageUrl
        ];
    }
}
