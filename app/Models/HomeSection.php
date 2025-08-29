<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    protected $fillable = [
        'title',
        'description',
        'button_text',
        'button_link',
        'image',
        'order',
        'status',
    ];

    protected $table = 'home_sections';
}
