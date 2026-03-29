<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\AttendenceReport;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'username' => 'xzidx_',
            'gender' => 'male',
            'email' => 'john@example.com',
            'password' => Hash::make('password123'), // Always encrypt passwords!
            'profile_picture' => 'https://example.com/photo.jpg',
            'position_id' => 1,
            'department_id' => 1,
        ]);
        User::create([
            'first_name' => 'Chan',
            'last_name' => 'Samnang',
            'username' => 'lucky',
            'gender' => 'male',
            'email' => 'c.samnang.dev@gmail.com',
            'password' => Hash::make('087884298'), // Always encrypt passwords!
            'profile_picture' => 'https://example.com/photo.jpg',
            'position_id' => 2,
            'department_id' => 2,
        ]);
        User::create([
            'first_name' => 'Chan1',
            'last_name' => 'Samnang1',
            'username' => 'Nang',
            'gender' => 'male',
            'email' => 'c.samnang.43dev@gmail.com',
            'password' => Hash::make('087884298'), // Always encrypt passwords!
            'profile_picture' => 'https://example.com/photo.jpg',
            'position_id' => 3,
            'department_id' => 3,
        ]);
         AttendenceReport::create([
           'week_hour' => 8,
        ]);
        AttendenceReport::create([
           'week_hour' => 8,
        ]);
        AttendenceReport::create([
           'week_hour' => 8,
        ]);
        
      
    }
}
