<?php

namespace Database\Factories;

use App\Models\PortfolioRole;
use App\Models\StudentPortfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PortfolioRole>
 */
class PortfolioRoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_portfolio_id' => StudentPortfolio::inRandomOrder()->first()->id,
            'role' => $this->faker->randomElement(['frontend', 'backend', 'motion designer', 'designer', 'animation']) 
        ];
    }
}
