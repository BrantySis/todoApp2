<?php

namespace Database\Seeders;

use App\Models\Classes; // Import the Classes model
use App\Models\Section; // Import the Section model
use App\Models\Student; // Import the Student model
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 5 classes
        for ($i = 1; $i <= 5; $i++) {
            $class = Classes::create(['name' => 'Class ' . $i]);
            
            // Create sections A and B for the class
            $sectionA = Section::create(['name' => 'A', 'class_id' => $class->id]);
            $sectionB = Section::create(['name' => 'B', 'class_id' => $class->id]);

            // Create 10 students for each section
            Student::factory()->count(10)->create(['section_id' => $sectionA->id]);
            Student::factory()->count(10)->create(['section_id' => $sectionB->id]);
        }
    }
}

