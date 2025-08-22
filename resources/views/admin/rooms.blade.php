<!-- resources/views/admin/rooms.blade.php -->

@extends('admin.layout')

@section('title', 'Kelola Kamar')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Daftar Kamar (Admin)</h2>

    <a href="{{ route('admin.room.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mb-6 inline-block">
        + Tambah Kamar Baru
    </a>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($rooms as $room)
        <div class="border rounded-lg overflow-hidden shadow">
            <img src="{{ asset('images/rooms/' . $room->image) }}"
                 alt="{{ $room->name }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold">{{ $room->name }}</h3>
                <p class="text-blue-600 font-bold">Rp {{ number_format($room->price, 0, ',', '.') }}</p>
                <p class="text-sm text-gray-500">{{ $room->size }} | {{ $room->capacity }} orang</p>
                <p class="text-xs text-gray-400 mt-1">Slug: {{ $room->slug }}</p>

                <!-- TOMBOL EDIT & HAPUS — hanya muncul di halaman admin -->
                <div class="mt-4 flex space-x-2">
                    <a href="{{ route('admin.room.edit', $room->id) }}"
                       class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        Edit
                    </a>
                    <form action="{{ route('admin.room.destroy', $room->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600"
                                onclick="return confirm('Yakin hapus kamar ini?')">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
