<!-- resources/views/admin/accessibilities.blade.php -->

@extends('admin.layout')

@section('title', 'Kelola Aksesibilitas & Kuliner')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Daftar Aksesibilitas & Kuliner</h2>

    <a href="{{ route('admin.accessibilities.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mb-6 inline-block">
        + Tambah Item
    </a>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($items as $item)
        <div class="border rounded-lg p-4 bg-gray-50">
            <i class="{{ $item->icon }} fa-3x text-success mb-3"></i>
            <h3 class="font-bold">{{ $item->title }}</h3>
            <p class="text-gray-600 text-sm mt-1">{{ $item->description }}</p>
            <p class="text-xs text-gray-500 mt-1">Urutan: {{ $item->order }}</p>

            <div class="mt-4 flex space-x-2">
                <a href="{{ route('admin.accessibilities.edit', $item->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                    Edit
                </a>
                <form action="{{ route('admin.accessibilities.destroy', $item->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600"
                            onclick="return confirm('Yakin hapus item ini?')">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
