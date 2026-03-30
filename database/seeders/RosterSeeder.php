<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roster;
class RosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


    Roster::create([
        'employee_name' => 'Mony',
        'date' => '2026-03-25',
        'shift' => 'Morning',
        'status' => 'Working'
    ]);

    Roster::create([
        'employee_name' => 'Nene',
        'date' => '2026-03-25',
        'shift' => 'Evening',
        'status' => 'Leave'
    ]);
      Roster::create([
        'employee_name' => 'Lucky',
        'date' => '2026-03-25',
        'shift' => 'Night',
        'status' => 'Woking'
    ]);

      Roster::create([
        'employee_name' => 'Nimol',
        'date' => '2026-03-25',
        'shift' => 'Morning',
        'status' => 'Off'
    ]);


      Roster::create([
        'employee_name' => 'Vannara',
        'date' => '2026-04-25',
        'shift' => 'Evening',
        'status' => 'Work'
    ]);
}


}
