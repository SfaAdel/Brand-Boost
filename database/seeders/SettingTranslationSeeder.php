<?php

namespace Database\Seeders;

use App\Models\SettingTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SettingTranslation::create([
            'name' => 'براند بوست',
            'address' => ' الرياض - المملكة العربية السعودية',
            'setting_id' => 1,
            'locale'=> 'ar',

        ]);

        SettingTranslation::create([
            'name' => 'Brand Boost',
            'address' => 'Egypt , cairo ',
            'setting_id' => 1,
            'locale'=> 'en',

        ]);
    }
}
