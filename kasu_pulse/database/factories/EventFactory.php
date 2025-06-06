<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->realText(30),
            'description' => fake()->realText(150),
            'date' => fake()->date(),
            'time' => fake()->time(),
            'venue' => fake()->address(),
            'category_id' => Category::factory()
        ];
    }
}
