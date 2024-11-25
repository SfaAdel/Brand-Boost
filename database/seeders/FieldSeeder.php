<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Field; // Ensure the Field model is imported

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fields = [
            [
                'type' => 'business_owner',
                'translations' => [
                    'ar' => [
                        'name' => 'تطوير البرمجيات',
                    ],
                    'en' => [
                        'name' => 'Software Development',
                    ],
                ],
            ],
            [
                'type' => 'freelancer',
                'translations' => [
                    'ar' => [
                        'name' => 'تطوير الويب',
                    ],
                    'en' => [
                        'name' => 'Web Development',
                    ],
                ],
            ],
            [
                'type' => 'freelancer',
                'translations' => [
                    'ar' => [
                        'name' => 'علوم البيانات والتحليلات',
                    ],
                    'en' => [
                        'name' => 'Data Science & Analytics',
                    ],
                ],
            ],
            [
                'type' => 'both',
                'translations' => [
                    'ar' => [
                        'name' => 'التسويق والإعلان',
                    ],
                    'en' => [
                        'name' => 'Marketing & Advertising',
                    ],
                ],
            ],
            [
                'type' => 'both',
                'translations' => [
                    'ar' => [
                        'name' => 'المالية والمحاسبة',
                    ],
                    'en' => [
                        'name' => 'Finance & Accounting',
                    ],
                ],
            ],
        ];

        foreach ($fields as $data) {
            // Create the base field record
            $field = Field::create([
                'type' => $data['type'] ?? 'both',
            ]);

            // Add translations for each language
            foreach ($data['translations'] as $locale => $translation) {
                $field->translateOrNew($locale)->fill($translation);
            }

            // Save translations
            $field->save();
        }
    }
}
