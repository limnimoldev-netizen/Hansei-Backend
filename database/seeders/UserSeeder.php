<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roster;
class UserSeeder extends Seeder
{

public function run()
{
    Roster::create([
        'employee_name' => 'Mony',
        'date' => '2026-03-25',
        'shift' => 'Morning',
        'status' => 'Working'
    ]);

    Roster::create([
        'employee_name' => 'Dara',
        'date' => '2026-03-25',
        'shift' => 'Evening',
        'status' => 'Off'
    ]);
}

}
