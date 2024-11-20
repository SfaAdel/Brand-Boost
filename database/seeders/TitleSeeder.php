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
                'title' => 'اهلا بك في منازل',
                'short_description' => 'فى شركة منازل نقدم خدمات صيانة شاملة للأجهزة المنزلية والمكيفات...',
            ],
            'en' => [
                'title' => 'Welcome to Manazel',
                'short_description' => 'At Manazel, we provide comprehensive maintenance services for appliances...',
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
                'short_description' => 'شركة منازل هى شركة رائدة ومتخصصة فى خدمات الصيانة المنزلية...',
            ],
            'en' => [
                'title' => 'About Us',
                'short_description' => 'Manazel is a leading company specializing in home maintenance services...',
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
                'title' => 'اراء عملائنا',
                'short_description' => 'تحقق من رأي العملاء في خدمتنا',
            ],
            'en' => [
                'title' => 'Our Clients’ Reviews',
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
                'title' => 'فريق العمل',
                'short_description' => 'تتكون شركتنا من عدة أقسام و كل قسم مسؤول عن انجاز مهام...',
            ],
            'en' => [
                'title' => 'The Team',
                'short_description' => 'Our company consists of several departments, each responsible...',
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