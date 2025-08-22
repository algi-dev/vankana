<!-- resources/views/admin/room_edit.blade.php -->

@extends('admin.layout')

@section('title', 'Edit Kamar')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Edit Kamar: {{ $room->name }}</h2>

    <form action="{{ route('admin.room.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Sama seperti create, tapi value diisi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label>Nama Kamar</label>
                <input type="text" name="name" class="w-full border rounded p-2" value="{{ $room->name }}" required>
            </div>
            <div>
                <label>Slug</label>
                <input type="text" name="slug" class="w-full border rounded p-2" value="{{ $room->slug }}" required>
            </div>
        </div>

        <div class="mb-4">
            <label>Deskripsi</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3" required>{{ $room->description }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div>
                <label>Harga</label>
                <input type="number" step="0.01" name="price" class="w-full border rounded p-2" value="{{ $room->price }}" required>
            </div>

        <div class="mb-4">
            <label>File Gambar</label>
            <input type="text" name="image" class="w-full border rounded p-2" value="{{ $room->image }}" required>
        </div>

        <div class="mb-4">
            <label>Link Booking</label>
            <input type="url" name="booking_link" class="w-full border rounded p-2" value="{{ $room->booking_link }}" required>
        </div>

        <div class="mb-4">
            <label>Status</label>
            <select name="status" class="w-full border rounded p-2">
                <option value="1" {{ $room->status ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ !$room->status ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
            <a href="{{ route('admin.room') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection
