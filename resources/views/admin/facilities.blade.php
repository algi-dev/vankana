<!-- resources/views/admin/facilities.blade.php -->

@extends('admin.layout')

@section('title', 'Kelola Fasilitas')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Daftar Fasilitas</h2>

    <a href="{{ route('admin.facilities.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mb-6 inline-block">
        + Tambah Fasilitas Baru
    </a>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($facilities as $facility)
        <div class="border rounded-lg p-4 bg-gray-50">
            <h3 class="font-bold text-lg">{{ $facility->name }}</h3>
            <p class="text-gray-600 text-sm">{{ $facility->description }}</p>
            <p class="text-xs text-gray-500">Icon: {{ $facility->icon }}</p>
            <p class="text-xs text-green-600 mt-1">Status: <strong>{{ $facility->status ? 'Aktif' : 'Nonaktif' }}</strong></p>

            <!-- Tombol dalam satu baris -->
            <div class="mt-4 flex space-x-2">
                <!-- Edit Button -->
                <a href="{{ route('admin.facilities.edit', $facility->id) }}"
                   class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                    Edit
                </a>

                <!-- Delete Form -->
                <form action="{{ route('admin.facilities.destroy', $facility->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600"
                            onclick="return confirm('Yakin hapus fasilitas ini?')">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
