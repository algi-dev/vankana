@extends('admin.layout')

@section('title', 'Edit Fasilitas')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Edit Fasilitas: {{ $facility->name }}</h2>

    <form action="{{ route('admin.facilities.update', $facility->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label>Nama</label>
            <input type="text" name="name" class="w-full border rounded p-2" value="{{ $facility->name }}" required>
        </div>

        <div class="mb-4">
            <label>Deskripsi</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3">{{ $facility->description }}</textarea>
        </div>

        <div class="mb-4">
            <label>Icon</label>
            <input type="text" name="icon" class="w-full border rounded p-2" value="{{ $facility->icon }}">
        </div>

        <div class="mb-4">
            <label>Status</label>
            <select name="status" class="w-full border rounded p-2">
                <option value="1" {{ $facility->status ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ !$facility->status ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
            <a href="{{ route('admin.facilities') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection
