<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hotel_policies', function (Blueprint $table) {
            $table->id();
            $table->string('title');           // "Check In", "Pasangan Menikah"
            $table->string('icon');            // "fas fa-clock", "fas fa-users"
            $table->text('description');       // "Mulai pukul 14:00..."
            $table->integer('order')->default(0); // urutan tampil
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hotel_policies');
    }
};
