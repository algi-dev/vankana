@extends('layout')

@section('content')

<!-- Hero Section -->
<div class="hero-section" style="position: relative;">
    <img src="{{ asset('images/hotell.avif') }}" alt="Hotel Vankana" class="hero-img">
    <div class="hero-overlay">
        <h1 class="hero-title">Stay Elegant</h1>
        <p class="hero-subtitle">Rasakan pengalaman menginap yang berkelas dan nyaman bersama Hotel Vankana.</p>
        <a href="{{ route('about') }}" class="btn btn-book">Lihat Lebih Lanjut</a>
    </div>
</div>

        <!-- Promo Section -->
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Gambar -->
        <div class="col-md-6">
            <div class="row g-3">
                <div class="col-6">
                    <img src="{{ asset('images/kamar.avif') }}" class="img-fluid rounded shadow" alt="Kamar">
                </div>
                <div class="col-6">
                    <img src="{{ asset('images/meja makan.avif') }}" class="img-fluid rounded shadow" alt="Meja Makan">
                </div>
                <div class="col-6">
                    <img src="{{ asset('images/parkiran.avif') }}" class="img-fluid rounded shadow" alt="Parkiran">
                </div>
                <div class="col-6">
                    <img src="{{ asset('images/lantai2.avif') }}" class="img-fluid rounded shadow" alt="Lantai 2">
                </div>
            </div>
        </div>

        <!-- Teks -->
        <div class="col-md-6">
            <h3 class="promo-title mb-3">Nikmati Pengalaman Premium</h3>
            <p class="promo-text">
                Hotel Vankana menghadirkan kenyamanan dan kemewahan dalam setiap sudut. Dengan kamar modern, fasilitas lengkap,
                serta pelayanan ramah, kami siap menjadikan masa menginap Anda berkesan.
                Dapatkan harga terbaik dan keuntungan eksklusif hanya di Hotel Vankana.
            </p>
            <a href="{{ route('rooms') }}" class="btn btn-book">Lihat Lebih Lanjut</a>
        </div>
    </div>
</div>
    @php
    $facilities = \App\Models\Facility::where('status', true)->get();
@endphp
    @include('partials.facilities', ['facilities' => $facilities])

@endsection
