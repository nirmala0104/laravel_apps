<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // nama playlist
            $table->string('link');  // link Spotify playlist
            $table->string('gambar'); // nama file atau path ke gambar cover
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('playlists');
    }
};
