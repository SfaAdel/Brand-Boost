<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobTitle; // Ensure the JobTitle model is imported

class JobTitleSeeder extends Seeder
{
    public function run()
    {
        // Define job titles data
        $jobTitles = [
            [
                'type' => 'business_owner',
                'translations' => [
                    'ar' => [
                        'name' => 'التسويق عبر مواقع التواصل الاجتماعى',
                    ],
                    'en' => [
                        'name' => 'Social Media Marketing',
                    ],
                ],
            ],
            [
                'type' => 'freelancer',
                'translations' => [
                    'ar' => [
                        'name' => 'كاتب محتوى',
                    ],
                    'en' => [
                        'name' => 'Content Writer',
                    ],
                ],
            ],
            [
                'type' => 'freelancer',
                'translations' => [
                    'ar' => [
                        'name' => 'مصور فوتوغرافي',
                    ],
                    'en' => [
                        'name' => 'Photographer',
                    ],
                ],
            ],
            [
                'type' => 'both',
                'translations' => [
                    'ar' => [
                        'name' => 'مصمم',
                    ],
                    'en' => [
                        'name' => 'Designer',
                    ],
                ],
            ],
            [
                'type' => 'both',
                'translations' => [
                    'ar' => [
                        'name' => 'مطور',
                    ],
                    'en' => [
                        'name' => 'Developer',
                    ],
                ],
            ],
        ];

        // Insert job titles into the database
        foreach ($jobTitles as $data) {
            // Create the base title record
            $jobTitle = JobTitle::create([
                'type' => $data['type'] ?? 'both',
            ]);

            // Add translations for each language
            foreach ($data['translations'] as $locale => $translation) {
                $jobTitle->translateOrNew($locale)->fill($translation);
            }

            // Save translations
            $jobTitle->save();
        }
    }
}
