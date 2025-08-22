@extends('layout')

@section('content')

<!-- Hero Section -->
<div class="hero-about position-relative text-center">
    <img src="{{ asset('images/resepsionis.avif') }}" class="w-100 hero-img-cover" alt="Hotel Vankana">
    <div class="hero-overlay-about d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="display-3 fw-bold hero-title">Tentang Hotel Vankana</h1>
        <p class="lead text-light">Pengalaman menginap nyaman, strategis, dan berkelas di jantung kota Kuningan.</p>
        <a href="{{ route('home') }}" class="btn btn-book">Kembali</a>
    </div>
</div>

<!-- Profil & Lokasi -->
<div class="container my-5">
    <div class="row align-items-center g-4">
        <div class="col-md-6">
            <h2 class="section-title">Profil Hotel</h2>
            <p>
                Terletak di jantung kota Kuningan, Hotel Vankana memberikan pilihan nyaman dan strategis.
                Para tamu dapat dengan mudah menjangkau atraksi wisata, institusi pendidikan, fasilitas kesehatan, dan pusat transportasi.
            </p>
            <p>
                RedDoorz Syariah near Taman Kota Kuningan menawarkan fasilitas modern, pelayanan ramah, dan suasana yang nyaman. Nikmati pengalaman menginap tak terlupakan.
            </p>
        </div>
        <div class="col-md-6">
            <div class="row g-3">
                <div class="col-6">
                    <img src="{{ asset('images/kamar.avif') }}" class="img-fluid rounded shadow" alt="Kamar">
                </div>
                <div class="col-6">
                    <img src="{{ asset('images/meja makan.avif') }}" class="img-fluid rounded shadow" alt="Meja Makan">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Aksesibilitas & Kuliner -->
<section class="akses-kuliner py-5" style="background:#fff;">
    <div class="container text-center">
        <h2 class="section-title mb-4">Aksesibilitas & Kuliner</h2>
        <div class="row g-4">
            @foreach($accessibilities as $item)
                <div class="col-md-3">
                    <div class="card shadow-sm p-3 border-0" style="border-top:3px solid #d4af37;">
                        <i class="{{ $item->icon }} fa-3x text-success mb-3"></i>
                        <h3 class="sub-title">{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@include('partials.facilities', ['facilities' => $facilities])

<!-- Kebijakan Hotel -->
<section class="kebijakan py-5" style="background:#fff;">
    <div class="container">
        <h2 class="section-title text-center mb-4">Kebijakan Hotel</h2>
        <div class="row g-4">
            @foreach($hotelPolicies as $policy)
                <div class="col-md-4">
                    <div class="policy-card p-4 rounded shadow-sm" style="background:linear-gradient(135deg,#f8f9fa,#fff); border-left:5px solid #d4af37;">
                        <i class="{{ $policy->icon }} fa-2x text-success mb-3"></i>
                        <h3 class="sub-title">{{ $policy->title }}</h3>
                        <p>{{ $policy->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection
