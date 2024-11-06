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
            'name' => 'منازل',
            'phone' => '00966542936554',
            'address' => ' الرياض - المملكة العربية السعودية',
            'logo' => 'logo.png',
            'favicon' => 'logo.png',
            'whatsapp' => '00966542936554',
            'email' => 'Info@mnazel.com',
            'facebook' => '#',
            'x' => 'https://x.com/Mnazel_KSA',
            'tiktok' => '#',
            'youtube' => '#',
            'instagram' => 'https://www.instagram.com/mnazel_sa/',
            'linkedin' => '#',

        ]);
    }
}
