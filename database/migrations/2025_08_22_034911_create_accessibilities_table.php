<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accessibilities', function (Blueprint $table) {
            $table->id();
            $table->string('title');           // "Dekat Sekolah", "Kuliner Lokal"
            $table->string('icon');            // "fas fa-school", "fas fa-utensils"
            $table->text('description');       // "SDIT Al Istikomah hanya 100m..."
            $table->integer('order')->default(0); // urutan tampil
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accessibilities');
    }
};
