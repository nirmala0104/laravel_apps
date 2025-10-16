<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Tempat, Tanggal Lahir');
            $table->string('Jenis Kelamin');
            $table->string('Agama');
            $table->string('alamat');
            $table->string('Email');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
