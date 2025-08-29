<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind Plugins (optional) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        sidebar: '#1e293b',
                        sidebarHover: '#334155'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 font-sans text-gray-800 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <h1 class="text-2xl font-bold">Vankana Admin</h1>
            </div>
            <div class="relative w-64">
                <input
                    type="text"
                    placeholder="Cari konten..."
                    class="w-full px-4 py-2 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                />
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </header>

    <div class="flex flex-1">
        <!-- Sidebar -->
        <aside class="w-64 bg-sidebar text-white min-h-[calc(100vh-4rem)] sticky top-16">
            <nav class="mt-6 px-2">
                <ul class="space-y-1">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-sidebarHover transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.home') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-sidebarHover transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.room') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-sidebarHover transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h6m-6 4h6m2 5H9" />
                            </svg>
                            <span>Kelola Kamar</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.facilities') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-sidebarHover transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            <span>Fasilitas</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.about') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-sidebarHover transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Tentang Kami</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.hotel.policies') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-sidebarHover transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span>Kebijakan Hotel</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.accessibilities') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-sidebarHover transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1112.04-12.04l.39.39a1 1 0 01.16.28v.16l.01.01a6 6 0 10-8.486 8.486L9.343 12" />
                            </svg>
                            <span>Akses & Kuliner</span>
                        </a>
                    </li>
                </ul>

                <!-- Logout Section -->
                <div class="mt-8 pt-4 border-t border-gray-700">
                    <form action="{{ route('admin.logout') }}" method="POST" class="px-2">
                        @csrf
                        <button type="submit" class="flex items-center space-x-3 w-full text-left text-red-400 hover:text-red-200 hover:bg-red-900/30 px-4 py-3 rounded-lg transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-50 min-h-[calc(100vh-4rem)]">
            <!-- Success Message -->
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded shadow-md animate-fade-in">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <!-- Custom Styles -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
</body>
</html>
