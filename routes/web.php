<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HotelPolicyController;
use App\Http\Controllers\AccessibilityController;

// ================================
// ROUTE WEB UTAMA (PUBLIC)
// ================================

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');

// ================================
// ROUTE ADMIN
// ================================

Route::prefix('admin')->name('admin.')->group(function () {

    // 🔐 Login & Register
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

    // Middleware: hanya untuk admin yang login
    Route::middleware('auth:admin')->group(function () {

        // Dashboard
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // Kelola Home
        Route::get('/home', function () {
            $facilities = \App\Models\Facility::where('status', true)->get();
            return view('admin.home', compact('facilities'));
        })->name('home');

        // Kelola About
        Route::get('/about', function () {
            $facilities = \App\Models\Facility::where('status', true)->get();
            return view('admin.about', compact('facilities'));
        })->name('about');

        // ================================
        // CRUD ROOM
        // ================================
        Route::get('/room', [RoomController::class, 'adminIndex'])->name('room');
        Route::get('/room/create', [RoomController::class, 'create'])->name('room.create');
        Route::post('/room', [RoomController::class, 'store'])->name('room.store');
        Route::get('/room/{id}/edit', [RoomController::class, 'edit'])->name('room.edit');
        Route::put('/room/{id}', [RoomController::class, 'update'])->name('room.update');
        Route::delete('/room/{id}', [RoomController::class, 'destroy'])->name('room.destroy');

        // ================================
        // CRUD FACILITIES
        // ================================
        Route::get('/facilities', [FacilityController::class, 'index'])->name('facilities');
        Route::get('/facilities/create', [FacilityController::class, 'create'])->name('facilities.create');
        Route::post('/facilities', [FacilityController::class, 'store'])->name('facilities.store');
        Route::get('/facilities/{id}/edit', [FacilityController::class, 'edit'])->name('facilities.edit');
        Route::put('/facilities/{id}', [FacilityController::class, 'update'])->name('facilities.update');
        Route::delete('/facilities/{id}', [FacilityController::class, 'destroy'])->name('facilities.destroy');

        // ================================
        // CRUD HOTEL POLICY
        // ================================
        Route::get('/hotel-policies', [HotelPolicyController::class, 'index'])->name('hotel.policies');
        Route::get('/hotel-policies/create', [HotelPolicyController::class, 'create'])->name('hotel.policies.create');
        Route::post('/hotel-policies', [HotelPolicyController::class, 'store'])->name('hotel.policies.store');
        Route::get('/hotel-policies/{id}/edit', [HotelPolicyController::class, 'edit'])->name('hotel.policies.edit');
        Route::put('/hotel-policies/{id}', [HotelPolicyController::class, 'update'])->name('hotel.policies.update');
        Route::delete('/hotel-policies/{id}', [HotelPolicyController::class, 'destroy'])->name('hotel.policies.destroy');

        // ================================
        // CRUD ACCESSIBILITY
        // ================================
        Route::get('/accessibilities', [AccessibilityController::class, 'index'])->name('accessibilities');
        Route::get('/accessibilities/create', [AccessibilityController::class, 'create'])->name('accessibilities.create');
        Route::post('/accessibilities', [AccessibilityController::class, 'store'])->name('accessibilities.store');
        Route::get('/accessibilities/{id}/edit', [AccessibilityController::class, 'edit'])->name('accessibilities.edit');
        Route::put('/accessibilities/{id}', [AccessibilityController::class, 'update'])->name('accessibilities.update');
        Route::delete('/accessibilities/{id}', [AccessibilityController::class, 'destroy'])->name('accessibilities.destroy');

        // Logout
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
