<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create titles with translations
        $advantages = [
            [
                
                'icon' => '1724120553.png',
                'translations' => [
                    'ar' => [
                        'title' => 'انضم إلى المجتمع',
                        'description' => 'قم بالتسجيل كمبدع أو مدير شركة للوصول إلى شبكة نابضة بالحياة من المواهب والفرص. إن الانضمام إلى منصتنا أمر سريع وسهل ومجاني تمامًا!',
                    ],
                    'en' => [
                        'title' => 'Join the Community',
                        'description' => 'Sign up as a creator or a company manager to access a vibrant network of talent and opportunities. Becoming part of our platform is quick, easy, and completely free!',
                    ],
                ],
            ],
          
            [
                
                'icon' => '1724120553.png',
                'translations' => [
                    'ar' => [
                        'title' => 'اعرض عملك',
                        'description' => 'يمكن للمبدعين تحميل المشاريع وإضافة الأوصاف وعرض مهاراتهم في أفضل صورة. أنشئ محفظة رائعة تبرز أمام المتعاونين المحتملين.',
                    ],
                    'en' => [
                        'title' => 'Showcase Your Work',
                        'description' => 'Creators can upload projects, add descriptions, and present their skills in the best light. Build an impressive portfolio that stands out to potential collaborators.',
                    ],
                ],
            ],

            [
                
                'icon' => '1724120553.png',
                'translations' => [
                    'ar' => [
                        'title' => 'التواصل والتعاون',
                        'description' => 'يمكن للمديرين استكشاف المشاريع والمبدعين المفضلين وبدء المحادثات مباشرة. اكتشف الحل الأمثل لاحتياجات مشروعك واجعل أفكارك تنبض بالحياة.',
                    ],
                    'en' => [
                        'title' => 'Connect and Collaborate',
                        'description' => 'Managers can explore projects, favorite creators, and initiate conversations directly. Discover the perfect fit for your project needs and bring your ideas to life.',
                    ],
                ],
            ],

            [
                
                'icon' => '1724120553.png',
                'translations' => [
                    'ar' => [
                        'title' => 'تحقيق النجاح',
                        'description' => 'من خلال التواصل السلس ودعمنا، يمكنك إنشاء مشاريع متميزة واكتساب التقدير وتنمية شبكتك. قصة نجاحك تبدأ هنا.',
                    ],
                    'en' => [
                        'title' => 'Achieve Success',
                        'description' => 'With seamless communication and our support, create outstanding projects, gain recognition, and grow your network. Your success story starts here.',
                    ],
                ],
            ],
        ];

        foreach ($advantages as $advantageData) {
            // Create the base advantage record
            $advantage = Advantage::create([
                'icon' => $advantageData['icon'],
            ]);

            // Add translations for each language
            foreach ($advantageData['translations'] as $locale => $translation) {
                $advantage->translateOrNew($locale)->fill($translation);
            }

            // Save translations
            $advantage->save();
        }
    }
}
