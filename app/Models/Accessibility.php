<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accessibility extends Model
{
    protected $fillable = [
        'title',
        'icon',
        'description',
        'order',
        'status',
    ];

    // Tidak perlu tambahkan _token — itu otomatis dihandle Laravel
}
