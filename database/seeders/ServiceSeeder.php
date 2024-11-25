<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service; // Adjust this to your Service model's namespace

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'icon' => 'service_icon1.png',
                'translations' => [
                    'ar' => [
                        'name' => 'تسويق وسائل التواصل الاجتماعي',
                        'description' => 'إدارة الحملات الإعلانية على منصات التواصل الاجتماعي مثل فيسبوك وإنستغرام.',
                        'unit_of_price' => 'لكل ساعة',
                    ],
                    'en' => [
                        'name' => 'Social Media Marketing',
                        'description' => 'Managing ad campaigns on social platforms like Facebook and Instagram.',
                        'unit_of_price' => 'Per Hour',
                    ],
                ],
            ],
            [
                'icon' => 'service_icon2.png',
                'translations' => [
                    'ar' => [
                        'name' => 'تصميم الجرافيك',
                        'description' => 'إنشاء تصاميم جذابة للشركات والعلامات التجارية.',
                        'unit_of_price' => 'لكل مشروع',
                    ],
                    'en' => [
                        'name' => 'Graphic Design',
                        'description' => 'Creating engaging designs for businesses and brands.',
                        'unit_of_price' => 'Per Project',
                    ],
                ],
            ],
            [
                'icon' => 'service_icon3.png',
                'translations' => [
                    'ar' => [
                        'name' => 'تطوير المواقع',
                        'description' => 'تصميم وبرمجة مواقع إلكترونية مخصصة.',
                        'unit_of_price' => 'لكل صفحة',
                    ],
                    'en' => [
                        'name' => 'Web Development',
                        'description' => 'Designing and coding custom websites.',
                        'unit_of_price' => 'Per Page',
                    ],
                ],
            ],
        ];

        foreach ($services as $data) {
            // Create the base service record
            $service = Service::create([
                'icon' => $data['icon'],
            ]);

            // Add translations for each language
            foreach ($data['translations'] as $locale => $translation) {
                $service->translations()->create(array_merge($translation, ['locale' => $locale]));
            }
        }
    }
}
