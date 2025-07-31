<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'name' => 'Sadman',
            'email' => 'sadmanmd225@gmail.com',
            'phone' => '01331-352180',
            'facebook' => 'https://www.facebook.com/saalimsadman6',
            'instagram' => 'https://www.instagram.com/_saalim_sadman/',
            'logo' => 'setting/default-logo.png',
            'favicon' => 'setting/default-favicon.png',
        ]);
    }
}
