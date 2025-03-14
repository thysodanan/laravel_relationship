<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $currentDate=Carbon::now()->format('d/m/Y');
        $students=[
            [
                'name'=>"lika",
                
            ],
            [
                'name'=>"sara",
               
            ],
            [
                'name'=>"john",
               
            ],

        ];
        DB::table('students')->insert($students);
    }
}
