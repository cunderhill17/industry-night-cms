<?php

namespace Database\Factories;

use App\Models\StudentProject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<StudentProject>
 */
class StudentProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3, false),
            'description' => $this->faker->paragraph(),
            'course' => $this->faker->randomElement(['MMED-3039', 'MMED-3040', 'MMED-3038', 'MMED-1058'])
        ];
    }
}
