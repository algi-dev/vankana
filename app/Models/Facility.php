<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon',      // misal: swimming.png
        'status',    // true/false
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
