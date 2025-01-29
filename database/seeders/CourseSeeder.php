<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            '2560' => Storage::json('2560.json'),
            '2565' => Storage::json('2565.json'),
        ];

        foreach ($files as $courseNumber => $file) {
            foreach ($file as $course) {
                $engName = preg_replace('/^\(|\)$/', '', trim($course['eng_name']));

                Course::create([
                    'course_number' => $courseNumber,
                    'code' => $course['code'],
                    'thai_name' => $course['thai_name'],
                    'eng_name' => $engName,
                    'thai_description' => $course['thai_description'] ?? null,
                    'eng_description' => $course['eng_description'] ?? null,
                    'credit' => $course['credit'],
                    'lecture_hours' => $course['lecture_hours'] ?? 0,
                    'practice_hours' => $course['practice_hours'] ?? 0,
                    'self_study_hours' => $course['self_study_hours'] ?? 0,
                    'condition' => $course['condition'] ?? null,
                ]);
            }
        }
    }
}
