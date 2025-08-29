@extends('admin.layout')

@section('title', 'Kelola Home')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Kelola Halaman Home</h2>
    <p class="text-gray-600 mb-6">Gunakan menu di bawah untuk mengelola konten halaman utama.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <a href="{{ route('admin.home.sections') }}" class="p-6 bg-blue-500 text-white rounded-xl hover:bg-blue-600 transition text-center">
            <div class="font-bold text-lg">Hero Section</div>
            <div class="text-sm mt-1">Edit judul, deskripsi, tombol</div>
        </a>

        <a href="{{ route('admin.facilities') }}" class="p-6 bg-purple-500 text-white rounded-xl hover:bg-purple-600 transition text-center">
            <div class="font-bold text-lg">Fasilitas</div>
            <div class="text-sm mt-1">Kelola fasilitas hotel</div>
        </a>

        <a href="{{ route('admin.about') }}" class="p-6 bg-green-500 text-white rounded-xl hover:bg-green-600 transition text-center">
            <div class="font-bold text-lg">Tentang Kami</div>
            <div class="text-sm mt-1">Edit konten about</div>
        </a>
    </div>

    <div class="mt-8 p-6 bg-gray-50 rounded-lg border">
        <h3 class="text-lg font-medium mb-2">Petunjuk</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-1">
            <li>Klik tombol untuk mengelola konten</li>
            <li>Semua perubahan akan langsung muncul di website pengunjung</li>
            <li>Gunakan cache clear jika perubahan tidak muncul</li>
        </ul>
    </div>
</div>
@endsection
