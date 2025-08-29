<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomeSection;

class HomeSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    HomeSection::create([
        'title' => 'Selamat Datang di Vankana',
        'description' => 'Hotel nyaman dan strategis di Kuningan, cocok untuk wisatawan dan pebisnis.',
        'button_text' => 'Lihat Kamar',
        'button_link' => '/rooms',
        'image' => 'images/home-banner.jpg',
        'order' => 1,
        'status' => true,
    ]);
}
}
