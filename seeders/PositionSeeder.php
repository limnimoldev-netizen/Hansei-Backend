<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class PositionSeeder extends Seeder
{
    
    
     public function run(): void
    
    {
        DB::table('positions')->insert([
               
            'name' => 'hiih',
            
        ]);
    }
}
