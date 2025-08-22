@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
    <div class="flex items-center space-x-3 mb-6">
        <div class="p-2 bg-blue-100 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
        </div>
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Selamat Datang, Admin!</h2>
            <p class="text-gray-600">Gunakan menu di bawah untuk mengelola konten website <strong class="text-blue-600">Vankana</strong></p>
        </div>
    </div>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
        <!-- Kelola Home -->
        <a href="{{ route('admin.home') }}"
           class="group p-6 bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-xl hover:from-blue-600 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-white/20 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <div class="font-semibold">Kelola Home</div>
            </div>
        </a>

        <!-- Kelola Room -->
        <a href="{{ route('admin.room') }}"
           class="group p-6 bg-gradient-to-br from-green-500 to-green-600 text-white rounded-xl hover:from-green-600 hover:to-green-700 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-white/20 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h6m-6 4h6m2 5H9" />
                    </svg>
                </div>
                <div class="font-semibold">Kelola Room</div>
            </div>
        </a>

        <!-- Kelola Fasilitas -->
        <a href="{{ route('admin.facilities') }}"
           class="group p-6 bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-xl hover:from-purple-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-white/20 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <div class="font-semibold">Kelola Fasilitas</div>
            </div>
        </a>

        <!-- Kelola About -->
        <a href="{{ route('admin.about') }}"
           class="group p-6 bg-gradient-to-br from-orange-500 to-orange-600 text-white rounded-xl hover:from-orange-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-white/20 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="font-semibold">Kelola About</div>
            </div>
        </a>

        <!-- Kelola Kebijakan Hotel -->
        <a href="{{ route('admin.hotel.policies') }}"
           class="group p-6 bg-gradient-to-br from-indigo-500 to-indigo-600 text-white rounded-xl hover:from-indigo-600 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-white/20 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div class="font-semibold">Kelola Kebijakan</div>
            </div>
        </a>

        <!-- Kelola Aksesibilitas & Kuliner -->
        <a href="{{ route('admin.accessibilities') }}"
           class="group p-6 bg-gradient-to-br from-teal-500 to-teal-600 text-white rounded-xl hover:from-teal-600 hover:to-teal-700 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-white/20 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1112.04-12.04l.39.39a1 1 0 01.16.28v.16l.01.01a6 6 0 10-8.486 8.486L9.343 12" />
                    </svg>
                </div>
                <div class="font-semibold">Akses & Kuliner</div>
            </div>
        </a>
    </div>

    <!-- Statistik Ringkas (Opsional) -->
    <div class="mt-8 p-6 bg-gray-50 rounded-xl border border-gray-200">
        <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
            Statistik Website
        </h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="text-center p-4 bg-white rounded-lg shadow-sm">
                <div class="text-2xl font-bold text-blue-600">{{ \App\Models\Room::count() }}</div>
                <div class="text-sm text-gray-600">Total Kamar</div>
            </div>
            <div class="text-center p-4 bg-white rounded-lg shadow-sm">
                <div class="text-2xl font-bold text-green-600">{{ \App\Models\Facility::count() }}</div>
                <div class="text-sm text-gray-600">Fasilitas</div>
            </div>
            <div class="text-center p-4 bg-white rounded-lg shadow-sm">
                <div class="text-2xl font-bold text-purple-600">{{ \App\Models\HotelPolicy::count() }}</div>
                <div class="text-sm text-gray-600">Kebijakan</div>
            </div>
            <div class="text-center p-4 bg-white rounded-lg shadow-sm">
                <div class="text-2xl font-bold text-teal-600">{{ \App\Models\Accessibility::count() }}</div>
                <div class="text-sm text-gray-600">Akses & Kuliner</div>
            </div>
        </div>
    </div>
</div>
@endsection
