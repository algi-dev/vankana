<!-- resources/views/admin/accessibility_edit.blade.php -->

@extends('admin.layout')

@section('title', 'Edit Aksesibilitas & Kuliner')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Edit: {{ $item->title }}</h2>

    <form action="{{ route('admin.accessibilities.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label>Judul</label>
            <input type="text" name="title" class="w-full border rounded p-2" value="{{ $item->title }}" required>
        </div>

        <div class="mb-4">
            <label>Icon (Font Awesome)</label>
            <input type="text" name="icon" class="w-full border rounded p-2" value="{{ $item->icon }}" placeholder="fas fa-school" required>
        </div>

        <div class="mb-4">
            <label>Deskripsi</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3" required>{{ $item->description }}</textarea>
        </div>

        <div class="mb-4">
            <label>Urutan Tampil</label>
            <input type="number" name="order" class="w-full border rounded p-2" value="{{ $item->order }}" required>
        </div>

        <div class="mb-4">
            <label>Status</label>
            <select name="status" class="w-full border rounded p-2">
                <option value="1" {{ $item->status ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ !$item->status ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
            <a href="{{ route('admin.accessibilities') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection
