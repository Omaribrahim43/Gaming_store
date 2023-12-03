<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('device_types')->insert([
            [
                'image' => 'frontend/assets/images/icon-mouse.png',
                'name' => 'PC',
            ],
            [
                'image' => 'frontend/assets/images/icon-gamepad.png',
                'name' => 'PS4',
            ],
            [
                'image' => 'frontend/assets/images/icon-gamepad-2.png',
                'name' => 'XBOX',
            ]
        ]);
    }
}
