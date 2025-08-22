<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HotelPolicy;

class HotelPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    HotelPolicy::create([
        'title' => 'Pasangan Menikah',
        'icon' => 'fas fa-users',
        'description' => 'Tamu berpasangan wajib menunjukkan identitas menikah.',
        'order' => 1,
        'status' => true,
    ]);

    HotelPolicy::create([
        'title' => 'Check In',
        'icon' => 'fas fa-clock',
        'description' => 'Mulai pukul 14:00 hingga 04:00 keesokan harinya.',
        'order' => 2,
        'status' => true,
    ]);

    HotelPolicy::create([
        'title' => 'Check Out',
        'icon' => 'fas fa-sign-out-alt',
        'description' => 'Sebelum pukul 12:00.',
        'order' => 3,
        'status' => true,
    ]);
}
}
