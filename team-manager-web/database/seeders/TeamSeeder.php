<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Team')->insert([
            ['team_id' => 'HR', 'team_name' => 'Human Resource','department_id' => "ADMIN"],
            ['team_id' => 'CEO', 'team_name' => 'CEO','department_id' => "DIR"],
            ['team_id' => 'PHP', 'team_name' => 'PHP','department_id' => "DEV"],
            ['team_id' => 'NET', 'team_name' => 'NET','department_id' => "DEV"],
            ['team_id' => 'COMTOR', 'team_name' => 'COMTOR','department_id' => "DEV"],
            ['team_id' => 'REACT', 'team_name' => 'REACT','department_id' => "DEV"],
            ['team_id' => 'JAVA', 'team_name' => 'JAVA','department_id' => "DEV"],
        ]);
    }
}
