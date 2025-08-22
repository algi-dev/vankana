@extends('admin.layout')

@section('title', 'Kelola Home')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Edit Halaman Home</h2>
    <p class="text-gray-600 mb-6">Berikut adalah tampilan asli halaman home. Admin bisa mengedit konten utama atau fasilitas.</p>

    <!-- Reuse konten home utama -->
    @include('home')

    <!-- Tombol Admin -->
    <div class="mt-8 p-4 bg-gray-50 border-t">
        <h3 class="text-lg font-medium mb-2">Aksi Admin</h3>
        <div class="space-x-2">
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit Hero Section</a>
            <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit Tentang Kami</a>
            <a href="{{ route('admin.facilities') }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Kelola Fasilitas</a>
        </div>
    </div>
</div>
@endsection
