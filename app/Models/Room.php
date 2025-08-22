<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'image',
        'booking_link',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'price' => 'decimal:2', // agar tetap 2 angka di belakang koma
    ];
}
