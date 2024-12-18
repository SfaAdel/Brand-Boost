<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Video::create([
            'type' => 'sec1',
            'video' => 'video1.mp4',
        ]);
        Video::create([
            'type' => 'sec2',
            'video' => 'video2.mp4',
        ]);
        Video::create([
            'type' => 'sec3',
            'video' => 'video3.mp4',
        ]);
        Video::create([
            'type' => 'sec4',
            'video' => 'video3.mp4',
        ]);
        Video::create([
            'type' => 'hero',
            'video' => 'hero.mp4',
        ]);

    }
}
