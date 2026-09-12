<?php

namespace Database\Seeders;

use App\Models\StudentProject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentProject::factory()->count(10)->create();
    }
}
