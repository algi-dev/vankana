<!-- resources/views/admin/room_create.blade.php -->

@extends('admin.layout')

@section('title', 'Tambah Kamar')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Tambah Kamar Baru</h2>

    @if (session('error'))
        <div class="alert alert-danger">
            {{  session('error') }}
        </div>
    @endif

    <form action="{{ route('admin.room.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block mb-1 font-medium">Nama Kamar</label>
                <input type="text" name="name" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block mb-1 font-medium">Slug (untuk URL)</label>
                <input type="text" name="slug" class="w-full border rounded p-2" required>
            </div>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Deskripsi</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3" required></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div>
                <label class="block mb-1 font-medium">Harga (Rp)</label>
                <input type="number" step="0.01" name="price" class="w-full border rounded p-2" required>
            </div>
        <!-- Upload Gambar dengan Tombol -->
        <div class="mb-4">
            <label class="block mb-1 font-medium">Upload Gambar Kamar</label>

            <!-- Hidden File Input -->
            <input
                type="file"
                name="image"
                id="imageInput"
                class="hidden"
                accept="image/jpeg,image/png,image/webp,image/gif"
                required>

            <!-- Custom Button -->
            <button
                type="button"
                onclick="document.getElementById('imageInput').click();"
                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                📁 Pilih File Gambar
            </button>

            <!-- File Name Preview -->
            <p id="fileName" class="text-sm text-gray-600 mt-2">Belum ada file dipilih</p>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Link Booking (RedDoorz, dll)</label>
            <input type="url" name="booking_link" class="w-full border rounded p-2" placeholder="https://example.com" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Status</label>
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

<!-- Script: Tampilkan Nama File & Konfirmasi -->
<script>
// Tampilkan nama file setelah dipilih
document.getElementById('imageInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    document.getElementById('fileName').textContent = file ? file.name : 'Belum ada file dipilih';
});

// Konfirmasi upload
document.querySelector('form').addEventListener('submit', function(e) {
    const input = document.getElementById('imageInput');
    if (input.files && input.files[0]) {
        const file = input.files[0];
        const allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
        const maxSize = 2 * 1024 * 1024; // 2MB

        if (!allowedTypes.includes(file.type)) {
            e.preventDefault();
            alert('Format gambar tidak didukung. Harap pilih file JPG, PNG, webp, atau GIF.');
            return;
        }

        if (file.size > maxSize) {
            e.preventDefault();
            alert('Ukuran gambar terlalu besar. Maksimal 2MB.');
            return;
        }

        const confirmUpload = confirm(`Apakah Anda yakin ingin mengunggah gambar: "${file.name}"?`);
        if (!confirmUpload) {
            e.preventDefault();
        }
    }
});
</script>
@endsection
