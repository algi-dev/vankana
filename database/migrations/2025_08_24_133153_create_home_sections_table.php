<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('home_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');           // "Selamat Datang di Vankana"
            $table->text('description');       // "Hotel nyaman di Kuningan..."
            $table->string('button_text')->nullable(); // "Lihat Kamar"
            $table->string('button_link')->nullable(); // "/rooms"
            $table->string('image')->nullable();       // "images/home-banner.jpg"
            $table->integer('order')->default(0);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('home_sections');
    }
};
