<?php

namespace Database\Factories;

use App\Models\ForumThreads;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ForumReplies>
 */
class ForumRepliesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'thread_id' => ForumThreads::factory(),
            'user_id' => User::factory(),
            'content' => fake()->realText(50)
        ];
    }
}
