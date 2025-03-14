<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $studentIds=Student::pluck('id')->toArray();
        $studentId=collect($studentIds)->random();

        $courseIds=Student::pluck('id')->toArray();
        $courseId=collect($courseIds)->random();
        return [
            'student_id'=>$studentId,
            'course_id'=>$courseId,
        ];
    }
}
