<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Setting::create([
            'phone' => '+20 1003391697',
            'logo' => 'logo.png',
            'favicon' => 'logo.png',
            'whatsapp' => '+20 1003391697',
            'email' => 'help@brandboost.com',
            'facebook' => '#',
            'x' => 'https://x.com/Mnazel_KSA',
            'tiktok' => '#',
            'youtube' => '#',
            'instagram' => 'https://www.instagram.com/mnazel_sa/',
            'linkedin' => '#',

        ]);
    }
}
