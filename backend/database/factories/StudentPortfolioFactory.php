<?php

namespace Database\Factories;

use App\Models\StudentPortfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<StudentPortfolio>
 */
class StudentPortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_name' => $this->faker->name(),
            'portfolio_url' => $this->faker->url()
        ];
    }
}
