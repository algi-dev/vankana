<!-- resources/views/admin/home_section_edit.blade.php -->

@extends('admin.layout')

@section('title', 'Edit Hero Section')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Edit: {{ $section->title }}</h2>

    <form action="{{ route('admin.home.sections.update', $section->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label>Judul</label>
            <input type="text" name="title" class="w-full border rounded p-2" value="{{ $section->title }}" required>
        </div>

        <div class="mb-4">
            <label>Deskripsi</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3" required>{{ $section->description }}</textarea>
        </div>

        <div class="mb-4">
            <label>Teks Tombol</label>
            <input type="text" name="button_text" class="w-full border rounded p-2" value="{{ $section->button_text }}">
        </div>

        <div class="mb-4">
            <label>Link Tombol</label>
            <input type="text" name="button_link" class="w-full border rounded p-2" value="{{ $section->button_link }}">
        </div>

        <div class="mb-4">
            <label>URL Gambar</label>
            <input type="text" name="image" class="w-full border rounded p-2" value="{{ $section->image }}" placeholder="/images/home-banner.jpg">
        </div>

        <div class="mb-4">
            <label>Urutan Tampil</label>
            <input type="number" name="order" class="w-full border rounded p-2" value="{{ $section->order }}" required>
        </div>

        <div class="mb-4">
            <label>Status</label>
            <select name="status" class="w-full border rounded p-2">
                <option value="1" {{ $section->status ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ !$section->status ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
            <a href="{{ route('admin.home.sections') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection
