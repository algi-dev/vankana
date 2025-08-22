<!-- resources/views/admin/room_create.blade.php -->

@extends('admin.layout')

@section('title', 'Tambah Kamar')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Tambah Kamar Baru</h2>

    <form action="{{ route('admin.room.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label>Nama Kamar</label>
                <input type="text" name="name" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label>Slug (untuk URL)</label>
                <input type="text" name="slug" class="w-full border rounded p-2" required>
            </div>
        </div>

        <div class="mb-4">
            <label>Deskripsi</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3" required></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div>
                <label>Harga (Rp)</label>
                <input type="number" step="0.01" name="price" class="w-full border rounded p-2" required>
            </div>
            <div>
        <div class="mb-4">
            <label>Nama File Gambar</label>
            <input type="text" name="image" class="w-full border rounded p-2" placeholder="superior.webp" required>
        </div>

        <div class="mb-4">
            <label>Link Booking (RedDoorz)</label>
            <input type="url" name="booking_link" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label>Status</label>
            <select name="status" class="w-full border rounded p-2">
                <option value="1">Aktif (Tersedia)</option>
                <option value="0">Nonaktif</option>
            </select>
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
            <a href="{{ route('admin.room') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection
