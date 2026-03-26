<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'gender' => 'male',
            'email' => 'john@example.com',
            'password' => Hash::make('password123'), // Always encrypt passwords!
            'profile_picture' => 'https://example.com/photo.jpg',
            'position_id' => 1,
            'department_id' => 1,
        ]);
            
    }
}
