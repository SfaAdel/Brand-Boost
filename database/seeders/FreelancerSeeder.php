<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Freelancer; // Ensure Freelancer model is imported

class FreelancerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $freelancers = [
            [
                'email' => 'youssef@gmail.com',
                'password' => bcrypt('password'),
                'profile_image' => 'youssef.png',
                'active' => 1,
                'fav' => 0,
                'job_title_id' => 1,
                'phone' => '01012333956',
                'date_of_birth' => '2000-11-01',
                'translations' => [
                    'ar' => [
                        'name' => 'يوسف محمد على',
                        'bio' => 'شركة ااا يبلبا لبل المجد للسيارات',
                    ],
                    'en' => [
                        'name' => 'Youssef Mohamed Ali',
                        'bio' => 'Elmagd Company For Cars',
                    ],
                ],
            ],
            [
                'email' => 'farah13@gmail.com',
                'password' => bcrypt('password'),
                'profile_image' => 'farah.png',
                'active' => 1,
                'fav' => 0,
                'phone' => '01099875656',
                'date_of_birth' => '2000-11-01',
                'job_title_id' => 1,
                'translations' => [
                    'ar' => [
                        'name' => 'فرح السيد راضي',
                        'bio' => 'لييبلاا ةتةل شركة النور',
                    ],
                    'en' => [
                        'name' => 'Farah Elsayed Rady',
                        'bio' => 'Al Nour Company',
                    ],
                ],
            ],
        ];

        foreach ($freelancers as $data) {
            // Create the base freelancer record
            $freelancer = Freelancer::create([
                'email' => $data['email'],
                'date_of_birth' => $data['date_of_birth'],
                'job_title_id' => $data['job_title_id'],
                'password' => $data['password'],
                'profile_image' => $data['profile_image'],
                'active' => $data['active'],
                'fav' => $data['fav'],
                'phone' => $data['phone'],
            ]);

            // Add translations for each language
            foreach ($data['translations'] as $locale => $translation) {
                $freelancer->translateOrNew($locale)->fill($translation);
            }

            // Save translations
            $freelancer->save();
        }
    }
}
