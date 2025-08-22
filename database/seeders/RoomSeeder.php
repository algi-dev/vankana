<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Room::insert([
        [
            'name' => 'Deluxe',
            'description' => 'Ideal untuk keluarga, dengan ruang luas dan meja makan eksklusif.',
            'price' => 200000,
            'image' => 'deluxe.webp'
        ],
        [
            'name' => 'Superior',
            'description' => 'Desain ruangan minimalis namun menciptakan rasa nyaman tersendiri.',
            'price' => 150000,
            'image' => 'superior.webp'
        ],
        [
            'name' => 'Twin',
            'description' => 'Dilengkapi fasilitas lengkap dan extra kasur yang nyaman.',
            'price' => 120000,
            'image' => 'twin.webp'
        ],
        [
            'name' => 'Standard',
            'description' => 'Kamar luas dengan tempat tidur nyaman dan fasilitas modern.',
            'price' => 110000,
            'image' => 'standard.webp'
        ]
    ]);
}
}
