<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accessibility;

class AccessibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Accessibility::create([
        'title' => 'Dekat Sekolah',
        'icon' => 'fas fa-school',
        'description' => 'SDIT Al Istikomah hanya 100m dari hotel.',
        'order' => 1,
        'status' => true,
    ]);

    Accessibility::create([
        'title' => 'Akses Medis',
        'icon' => 'fas fa-hospital',
        'description' => 'RS Juanda berjarak hanya 4km dari hotel.',
        'order' => 2,
        'status' => true,
    ]);

    Accessibility::create([
        'title' => 'Wisata Alam',
        'icon' => 'fas fa-mountain',
        'description' => 'Mata Air Lembah Cibacang hanya 150m dari hotel.',
        'order' => 3,
        'status' => true,
    ]);

    Accessibility::create([
        'title' => 'Kuliner Lokal',
        'icon' => 'fas fa-utensils',
        'description' => 'The Seafood Ali Action hanya 150m dari hotel.',
        'order' => 4,
        'status' => true,
    ]);
}
}
