<?php

namespace App\Http\Controllers;

use App\Models\HotelPolicy;
use App\Models\Facility;
use App\Models\Accessibility;
use App\Models\HomeSection;

class HomeController extends Controller
{
    /**
     * Tampilkan halaman utama
     */
    public function index()
{
    $facilities = Facility::where('status', true)->get();
    $homeSections = HomeSection::where('status', true)->orderBy('order')->get();

    return view('home', compact('facilities', 'homeSections'));
}

    /**
     * Tampilkan halaman about
     */
    public function about()
    {
        $facilities = Facility::where('status', true)->get();
        $hotelPolicies = HotelPolicy::where('status', true)->orderBy('order')->get();
        $accessibilities = Accessibility::where('status', true)->orderBy('order')->get();

        return view('about', compact('facilities', 'hotelPolicies', 'accessibilities'));
    }
}
