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
                        'h1' => 'نحن ،',
                        'h2' => 'نحن',
                        'p' => '-',
                    ],
                    'en' => [
                        'h1' => 'We are,',
                        'h2' => 'We are',
                        'p' => 'p1',
                    ],
                ],
            ],

            [

                'translations' => [
                    'ar' => [
                        'h1' => 'الطريقة الجديدة,',
                        'h2' => 'الرؤية الجديدة',
                        'p' => '--',
                    ],
                    'en' => [
                        'h1' => 'The new way,',
                        'h2' => 'The new vision',
                        'p' => 'p2',
                    ],
                ],
            ],

            [

                'translations' => [
                    'ar' => [
                        'h1' => 'الواقع',
                        'h2' => 'ابدأ معنا',
                        'p' => '---',
                    ],
                    'en' => [
                        'h1' => 'The reality',
                        'h2' => 'Start with us',
                        'p' => 'p3',
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
