<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course=[
            [
                'name'=>"java",
            ],
            [
                'name'=>"php",
            ],
            [
                'name'=>"javascript",
            ],
            [
                'name'=>"ruby",
            ],
        ];
        DB::table('courses')->insert($course);
    }
}
