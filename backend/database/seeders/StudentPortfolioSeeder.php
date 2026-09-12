<?php

namespace Database\Seeders;

use App\Models\StudentPortfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentPortfolio::factory()->count(10)->create();
    }
}
