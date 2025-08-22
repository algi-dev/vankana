@extends('admin.layout')

@section('title', 'Tambah Fasilitas')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Tambah Fasilitas Baru</h2>

    <form action="{{ route('admin.facilities.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label>Nama</label>
            <input type="text" name="name" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label>Deskripsi</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3"></textarea>
        </div>

        <div class="mb-4">
            <label>Icon (nama file atau class)</label>
            <input type="text" name="icon" class="w-full border rounded p-2" placeholder="swimming.png">
        </div>

        <div class="mb-4">
            <label>Status</label>
            <select name="status" class="w-full border rounded p-2">
                <option value="1">Aktif</option>
                <option value="0">Nonaktif</option>
            </select>
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
            <a href="{{ route('admin.facilities') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection
