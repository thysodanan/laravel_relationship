<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role=[
            [
                'name' => 'App',
            ],
            [
                'name' => 'web',
            ],
            [
                'name' => 'Design',
            ],
            [
                'name' => 'Database',
            ],
            [
                'name' => 'Network',
            ],
        ];
        DB::table('roles')->insert($role);
    }
}
