<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'position' => fake()->jobTitle(),
            'description' => fake()->paragraph(),
            'company' => fake()->company(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'user_id' => 1,
        ];
    }
}
