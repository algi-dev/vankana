<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    public function run()
    {
        $facilities = [
            ['name' => 'Alat Mandi Gratis', 'icon' => 'fas fa-bath'],
            ['name' => 'Resepsionis', 'icon' => 'fas fa-concierge-bell'],
            ['name' => 'WiFi Gratis', 'icon' => 'fas fa-wifi'],
            ['name' => 'Parkiran Luas', 'icon' => 'fas fa-parking'],
        ];

        foreach ($facilities as $facility) {
            Facility::create($facility);
        }
    }
}
