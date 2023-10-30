<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            // Admin
            [
                'image' => 'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
                'username' => 'Admin',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
            ]
        ]);
        DB::table('users')->insert([
            // Admin
            [
                'image' => 'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
                'username' => 'Client',
                'name' => 'client',
                'email' => 'client@gmail.com',
                'address' => 'jordan-irbid',
                'phone' => '0776991624',
                'password' => Hash::make('password'),
            ]
        ]);
    }
}
