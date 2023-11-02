<?php

namespace Database\Factories\Interviews;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interviews\Interview>
 */
class InterviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'interview_date' => fake()->date,
            'interview_location' => fake()->address,
            'notes' => fake()->paragraph,

        ];
    }
}
