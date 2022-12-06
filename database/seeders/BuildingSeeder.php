<?php

namespace Database\Seeders;

use App\Models\Building;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Building::create ([
            'name' => "Steen"
        ]);

        Building::create ([
            'name' => "Curio"
        ]);

        Building::create ([
            'name' => "Trivago"
        ]);

        Building::create ([
            'name' => "Wesley's huis"
        ]);
    }
}
