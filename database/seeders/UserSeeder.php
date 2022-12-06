<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Joost Ambagts',
            'email' => 'ja17@curio.nl',
            'password' => Hash::make('testtest'),
        ]);

        User::create([
            'name' => 'Fedde van Gils',
            'email' => 'f.vangils@curio.nl',
            'password' => Hash::make('Welkom123')
        ]);
    }
}
