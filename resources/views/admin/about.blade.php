@extends('admin.layout')

@section('title', 'Kelola About')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Edit Halaman About</h2>
    <p class="text-gray-600 mb-6">Tampilkan dan kelola konten about.</p>

    <!-- Reuse konten about utama -->
    @include('about')

    <!-- Tombol Admin -->
    <div class="mt-8 p-4 bg-gray-50 border-t">
        <h3 class="text-lg font-medium mb-2">Aksi Admin</h3>
        <div class="space-x-2">
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit Konten</a>
            <a href="{{ route('admin.facilities') }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Kelola Fasilitas</a>
        </div>
    </div>

    <!-- resources/views/about.blade.php -->

<!-- Kebijakan Hotel -->
<section class="kebijakan py-5" style="background:#fff;">
    <div class="container">
        <h2 class="section-title text-center mb-4">Kebijakan Hotel</h2>
        <div class="row g-4">
            @foreach($hotelPolicies as $policy)
                @if($policy->status)
                <div class="col-md-4">
                    <div class="policy-card p-4 rounded shadow-sm" style="background:linear-gradient(135deg,#f8f9fa,#fff); border-left:5px solid #d4af37;">
                        <i class="{{ $policy->icon }} fa-2x text-success mb-3"></i>
                        <h3 class="sub-title">{{ $policy->title }}</h3>
                        <p>{{ $policy->description }}</p>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>


</div>
@endsection
