<?php

namespace Database\Seeders;

use App\Models\PortfolioRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PortfolioRole::factory()->count(10)->create();
    }
}
