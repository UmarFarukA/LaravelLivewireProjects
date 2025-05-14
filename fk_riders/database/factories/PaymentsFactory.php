<?php

namespace Database\Factories;

use App\Models\Products;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payments>
 */
class PaymentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'product_id' => Products::factory(),
            'amount_paid' => fake()->randomFloat(min:75000.00),
            'payment_type' => fake()->randomElement([1, 2]),
            'status' => fake()->randomElement([0, 2]),
            'due_date' => fake()->date(format:'Y-m-d')
        ];
    }
}
