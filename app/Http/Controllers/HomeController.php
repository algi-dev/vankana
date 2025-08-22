<?php

namespace App\Http\Controllers;
use App\Models\HotelPolicy;
use App\Models\Facility;
use App\Models\Accessibility;

class HomeController extends Controller
{
    public function index()
    {
        $facilities = Facility::where('status', true)->get();
        return view('home', compact('facilities'));
    }

    // app/Http/Controllers/HomeController.php
public function about()
{
    $facilities = Facility::where('status', true)->get();
    $hotelPolicies = HotelPolicy::where('status', true)->orderBy('order')->get();
    $accessibilities = Accessibility::where('status', true)->orderBy('order')->get(); // Harus pakai ini

    return view('about', compact('facilities', 'hotelPolicies', 'accessibilities'));
}
}
