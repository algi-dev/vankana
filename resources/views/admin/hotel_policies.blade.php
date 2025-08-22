<!-- resources/views/admin/hotel_policies.blade.php -->

@extends('admin.layout')

@section('title', 'Kelola Kebijakan Hotel')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Daftar Kebijakan Hotel</h2>

    <a href="{{ route('admin.hotel.policies.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mb-6 inline-block">
        + Tambah Kebijakan
    </a>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($policies as $policy)
        <div class="border rounded-lg p-4 bg-gray-50">
            <i class="{{ $policy->icon }} fa-2x text-success mb-3"></i>
            <h3 class="font-bold">{{ $policy->title }}</h3>
            <p class="text-gray-600 text-sm mt-1">{{ $policy->description }}</p>
            <p class="text-xs text-gray-500 mt-1">Urutan: {{ $policy->order }}</p>

            <div class="mt-4 flex space-x-2">
                <a href="{{ route('admin.hotel.policies.edit', $policy->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                    Edit
                </a>
                <form action="{{ route('admin.hotel.policies.destroy', $policy->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600"
                            onclick="return confirm('Yakin hapus kebijakan ini?')">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
