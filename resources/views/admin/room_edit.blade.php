<!-- resources/views/admin/room_edit.blade.php -->

@extends('admin.layout')

@section('title', 'Edit Kamar')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Edit Kamar: {{ $room->name }}</h2>

    <form action="{{ route('admin.room.update', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Nama & Slug -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block mb-1 font-medium">Nama Kamar</label>
                <input type="text" name="name" class="w-full border rounded p-2" value="{{ $room->name }}" required>
            </div>
            <div>
                <label class="block mb-1 font-medium">Slug (untuk URL)</label>
                <input type="text" name="slug" class="w-full border rounded p-2" value="{{ $room->slug }}" required>
            </div>
        </div>

        <!-- Deskripsi -->
        <div class="mb-4">
            <label class="block mb-1 font-medium">Deskripsi</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3" required>{{ $room->description }}</textarea>
        </div>

        <!-- Harga, Kapasitas, Ukuran -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div>
                <label class="block mb-1 font-medium">Harga (Rp)</label>
                <input type="number" step="0.01" name="price" class="w-full border rounded p-2" value="{{ $room->price }}" required>
            </div>
            <div>
                <label class="block mb-1 font-medium">Kapasitas (orang)</label>
                <input type="number" name="capacity" class="w-full border rounded p-2" value="{{ $room->capacity }}" min="1">
            </div>
            <div>
                <label class="block mb-1 font-medium">Ukuran Kamar</label>
                <input type="text" name="size" class="w-full border rounded p-2" value="{{ $room->size }}" placeholder="30 m²">
            </div>
        </div>

        <!-- Pratinjau Gambar Lama -->
        <div class="mb-4">
            <label class="block mb-1 font-medium">Gambar Saat Ini</label>
            @if($room->image && \Illuminate\Support\Facades\File::exists(public_path($room->image)))
                <div class="mb-2">
                    <img src="{{ asset($room->image) }}" alt="Gambar Kamar" class="max-h-40 rounded shadow border">
                </div>
            @else
                <p class="text-gray-500 text-sm">Tidak ada gambar tersedia</p>
            @endif
        </div>

        <!-- Upload Gambar Baru -->
        <div class="mb-4">
            <label class="block mb-1 font-medium">Ganti Gambar (Opsional)</label>

            <!-- Hidden File Input -->
            <input
                type="file"
                name="image"
                id="imageInput"
                class="hidden"
                accept="image/jpeg,image/png,image/webp,image/gif">

            <!-- Custom Button -->
            <button
                type="button"
                onclick="document.getElementById('imageInput').click();"
                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                📁 Pilih File Baru
            </button>

            <!-- File Name Preview -->
            <p id="fileName" class="text-sm text-gray-600 mt-2">Belum ada file dipilih</p>
            <p class="text-xs text-gray-400">Kosongkan jika tidak ingin mengganti gambar.</p>
        </div>

        <!-- Link Booking -->
        <div class="mb-4">
            <label class="block mb-1 font-medium">Link Booking (RedDoorz, dll)</label>
            <input type="url" name="booking_link" class="w-full border rounded p-2" value="{{ $room->booking_link }}" required>
        </div>

        <!-- Status -->
        <div class="mb-4">
            <label class="block mb-1 font-medium">Status</label>
            <select name="status" class="w-full border rounded p-2">
                <option value="1" {{ $room->status ? 'selected' : '' }}>Aktif (Tersedia)</option>
                <option value="0" {{ !$room->status ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        <!-- Tombol Aksi -->
        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
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

// Konfirmasi sebelum submit
document.querySelector('form').addEventListener('submit', function(e) {
    const input = document.getElementById('imageInput');
    if (input.files && input.files[0]) {
        const file = input.files[0];
        const allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
        const maxSize = 2 * 1024 * 1024; // 2MB

        if (!allowedTypes.includes(file.type)) {
            e.preventDefault();
            alert('Format gambar tidak didukung. Harap pilih file JPG, PNG, WEBP, atau GIF.');
            return;
        }

        if (file.size > maxSize) {
            e.preventDefault();
            alert('Ukuran gambar terlalu besar. Maksimal 2MB.');
            return;
        }

        const confirmUpload = confirm(`Apakah Anda yakin ingin mengganti gambar dengan: "${file.name}"?`);
        if (!confirmUpload) {
            e.preventDefault();
        }
    }
});
</script>
@endsection
