<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelPolicy extends Model
{
    protected $fillable = [
        'title',
        'icon',
        'description',
        'order',
        'status',
    ];

    protected $table = 'hotel_policies';
}
