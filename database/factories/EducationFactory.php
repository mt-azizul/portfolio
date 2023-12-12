<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'degree' => fake()->word(),
            'field_of_study' => fake()->word(),
            'institution' => fake()->word(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
        ];
    }
}
