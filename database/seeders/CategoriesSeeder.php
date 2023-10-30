<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Action-Adventure'],
            ['name' => 'Open-World RPG'],
            ['name' => 'Western'],
            ['name' => 'Action-RPG'],
            ['name' => 'Fantasy'],
            ['name' => 'First-Person Shooter'],
            ['name' => 'Sandbox'],
            ['name' => 'Survival'],
            ['name' => 'Horror'],
            ['name' => '3D Platformer'],
            ['name' => 'Battle Royale'],
            ['name' => ' Life Simulation'],
            ['name' => 'Social Simulation'],
        ]);
    }
}
