@extends('admin.layout')

@section('title', 'Tambah Aksesibilitas & Kuliner')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Tambah Item Baru</h2>

    <form action="{{ route('admin.accessibilities.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label>Judul</label>
            <input type="text" name="title" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label>Icon (Font Awesome)</label>
            <input type="text" name="icon" class="w-full border rounded p-2" placeholder="fas fa-school" required>
        </div>

        <div class="mb-4">
            <label>Deskripsi</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3" required></textarea>
        </div>

        <div class="mb-4">
            <label>Urutan Tampil</label>
            <input type="number" name="order" class="w-full border rounded p-2" required>
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
            <a href="{{ route('admin.accessibilities') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection
