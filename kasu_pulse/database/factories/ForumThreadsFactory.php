<?php

namespace Database\Factories;

use App\Models\ForumThreads;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ForumThreads>
 */
class ForumThreadsFactory extends Factory
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
            'content' => fake()->realText(50),
            'created_by' => User::factory()
        ];
    }
}
