<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "employer_id" => Employer::factory(),
            "title" => fake()->jobTitle(),
            "description" => fake()->paragraph(2),
            "salary" => fake()->numberBetween(25000, 150000),
            "requirements" => fake()->paragraph(1),
            "benefits" => fake()->paragraph(1),
            "address" => fake()->address(),
            "city" => fake()->city(),
            "state" => fake()->city(),
            "phone" => fake()->phoneNumber(),
            "email" => fake()->companyEmail()
        ];
    }
}
