<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create titles with translations
        $titles = [
            [
                'section' => 'main',
                'icon' => '1724120553.png',
                'banner' => '1724121106.png',
                'translations' => [
                    'ar' => [
                        'title' => 'We are,
The new way,
The reality',
                        'short_description' => 'نحن
الرؤية الجديدة
ابدأ معنا',
                    ],
                    'en' => [
                        'title' => 'نحن،
الطريقة الجديدة،
الواقع',
                        'short_description' => 'We are
The new vision
Start with us',
                    ],
                ],
            ],
            [
                'section' => 'about_us',
                'icon' => '1717146544.png',
                'banner' => '2.png',
                'translations' => [
                    'ar' => [
                        'title' => 'من نحن',
                        'short_description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, iure a totam dolorum voluptatibus quo cumque voluptatum aliquid ipsa doloremque beatae natus et sunt ipsum! Et repellat amet minus corrupti.',
                    ],
                    'en' => [
                        'title' => 'About Us',
                        'short_description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, iure a totam dolorum voluptatibus quo cumque voluptatum aliquid ipsa doloremque beatae natus et sunt ipsum! Et repellat amet minus corrupti.',
                    ],
                ],
            ],
            [
                'section' => 'services',
                'banner' => '3.png',
                'translations' => [
                    'ar' => [
                        'title' => 'خدماتنا',
                        'short_description' => 'نقدم لك جميع الخدمات بكل دقة و احترافية مع فريقنا الفني...',
                    ],
                    'en' => [
                        'title' => 'Our Services',
                        'short_description' => 'We offer all services with precision and professionalism...',
                    ],
                ],
            ],
            [
                'section' => 'stars',
                'translations' => [
                    'ar' => [
                        'title' => 'أبرز الموهوبين',
                        'short_description' => 'تحقق من رأي العملاء في خدمتنا',
                    ],
                    'en' => [
                        'title' => 'Talents',
                        'short_description' => 'Check out what our clients say about our services',
                    ],
                ],
            ],
            [
                'section' => 'advantages',
                'translations' => [
                    'ar' => [
                        'title' => 'ماهي الأمور المذهلة التي يمكنك الحصول عليها معنا ؟',
                        'short_description' => 'عند التعامل مع شركتنا المتخصصة في عمليات الصيانة و التصليح...',
                    ],
                    'en' => [
                        'title' => 'What Amazing Things Can You Get with Us?',
                        'short_description' => 'When dealing with our specialized maintenance and repair company...',
                    ],
                ],
            ],
            [
                'section' => 'join',
                'translations' => [
                    'ar' => [
                        'title' => ' ولكن، كيف يعمل؟',
                        'short_description' => '---',
                    ],
                    'en' => [
                        'title' => 'But, How It Works?',
                        'short_description' => '---',
                    ],
                ],
            ],
            [
                'section' => 'blogs',
                'banner' => '7.png',
                'translations' => [
                    'ar' => [
                        'title' => 'المدونات',
                        'short_description' => 'نقدم لكم آخر الصيحات والأخبار في طرق تصميم منازلكم...',
                    ],
                    'en' => [
                        'title' => 'Blogs',
                        'short_description' => 'We bring you the latest trends and news on designing your homes...',
                    ],
                ],
            ],
            [
                'section' => 'contacts',
                'banner' => '3.png',
                'translations' => [
                    'ar' => [
                        'title' => 'تواصل معنا',
                        'short_description' => 'اذا كان لديك أي استفسار أو تساؤل بخصوص شركة الأنظمة الأولية...',
                    ],
                    'en' => [
                        'title' => 'Contact Us',
                        'short_description' => 'If you have any inquiries about our company, please fill out...',
                    ],
                ],
            ],
        ];

        foreach ($titles as $data) {
            // Create the base title record
            $title = Title::create([
                'section' => $data['section'],
                'icon' => $data['icon'] ?? null,
                'banner' => $data['banner'] ?? null,
            ]);

            // Add translations for each language
            foreach ($data['translations'] as $locale => $translation) {
                $title->translateOrNew($locale)->fill($translation);
            }

            // Save translations
            $title->save();
        }
    }
}
