<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create titles with translations
        $advantages = [
            [

                'translations' => [
                    'ar' => [
                        'h11' => 'نحن ،',
                        'h21' => 'نحن',
                        'h12' => 'الطريقة الجديدة,',
                        'h22' => 'الرؤية الجديدة',
                        'h13' =>  'الواقع',
                        'h23' => 'ابدأ معنا',
                        'p' => '-',
                    ],
                    'en' => [
                        'h11' => 'We are,',
                        'h21' => 'We are',
                        'h12' => 'The new way,',
                        'h22' => 'The new vision',
                        'h13' => 'The reality',
                        'h23' => 'Start with us',
                        'p' => 'p1',
                    ],
                ],
            ],

          


        ];

        foreach ($advantages as $advantageData) {
            // Create the base advantage record
            $advantage = HeroSection::create();

            // Add translations for each language
            foreach ($advantageData['translations'] as $locale => $translation) {
                $advantage->translateOrNew($locale)->fill($translation);
            }

            // Save translations
            $advantage->save();
        }
    }
}
