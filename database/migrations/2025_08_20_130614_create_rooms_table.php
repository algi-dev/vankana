<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);                 // Superior, Deluxe, dll
            $table->string('slug')->unique();            // superior, deluxe, dll (untuk URL/SEO)
            $table->text('description');                 // deskripsi singkat
            $table->decimal('price', 10, 2);             // 150000.00
            $table->string('image');                     // contoh: superior.webp
            $table->text('booking_link');                // URL RedDoorz
            $table->boolean('status')->default(true);    // tersedia / tidak
            $table->unsignedTinyInteger('capacity')->nullable(); // kapasitas orang
            $table->string('size', 50)->nullable();      // contoh: "20 m²"
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};

