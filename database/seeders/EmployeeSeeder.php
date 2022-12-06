<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create ([
            "name" => "wesley",
            "role_id" => 1,
            "building_id" => 3
        ]);

        Employee::create ([
            "name" => "thomas",
            "role_id" => 2,
            "building_id" => 2
        ]);

        Employee::create ([
            "name" => "joost",
            "role_id" => 3,
            "building_id" => 1
        ]);

        Employee::create ([
            "name" => "yassine",
            "role_id" => 4,
            "building_id" => 2
        ]);

        Employee::create ([
            "name" => "bram",
            "role_id" => 1,
            "building_id" => 2
        ]);

        Employee::create ([
            "name" => "gerben",
            "role_id" => 2,
            "building_id" => 3
        ]);
    }
}
