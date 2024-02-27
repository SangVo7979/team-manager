<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('department')->insert([
            ['department_id' => 'ADMIN', 'department_name' => 'Administration','descriptions' => ""],
            ['department_id' => 'DIR', 'department_name' => 'Director','descriptions' => ""],
            ['department_id' => 'DEV', 'department_name' => 'Development','descriptions' => ""],
        ]);
    }
}
