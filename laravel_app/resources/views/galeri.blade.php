@extends('layouts.app')

@section('title', 'Galeri Pendakian Roblox')

@section('content')
<div class="galeri-container">
    <h1>Galeri Pendakian Gunung di Roblox </h1>
    <p>Beberapa momen seru saat mendaki gunung di Roblox bersama teman-teman!</p>

    <div class="foto-galeri">
        <div class="foto-item">
            <img src="{{ asset('images/gunung1.png') }}" alt="Gunung Roblox 1">
            <p><strong>Mount MOMO</strong><br>Perjalanan panjang seru banget sih</p>
        </div>

        <div class="foto-item">
            <img src="{{ asset('images/gunung2.png') }}" alt="Gunung Roblox 2">
            <p><strong>Mount Banda Naera</strong><br>Pemandangannya luar biasa indah </p>
        </div>

        <div class="foto-item">
            <img src="{{ asset('images/gunung3.png') }}" alt="Gunung Roblox 3">
            <p><strong>Mount Pedaunan</strong><br>Gunungnya tidak begitu sulit untuk dilewatin </p>
        </div>

        <div class="foto-item">
            <img src="{{ asset('images/gunung4.png') }}" alt="Gunung Roblox 4">
            <p><strong>Mount Daun</strong><br>Gunung yang cukup sulit untuk pemula yang baru main </p>
        </div>

        <div class="foto-item">
            <img src="{{ asset('images/gunung5.png') }}" alt="Gunung Roblox 5">
            <p><strong>Mount Masurai</strong><br>Gunung yang cocok buat foto-foto, rintangannya mudah </p>
        </div>

        <div class="foto-item">
            <img src="{{ asset('images/gunung6.png') }}" alt="Gunung Roblox 6">
            <p><strong>Mount Atin</strong><br>Gunung yang rintangannya lebih sulit dari Mount Daun </p>
        </div>

        <div class="foto-item">
            <img src="{{ asset('images/gunung7.png') }}" alt="Gunung Roblox 7">
            <p><strong>Mount Varsha</strong><br>Pemandangannya sangat bagus, seperti di film rapunzel </p>
        </div>

        <div class="foto-item">
            <img src="{{ asset('images/gunung8.png') }}" alt="Gunung Roblox 8">
            <p><strong>Mount Bersabar</strong><br>Sesuai dengan namanya, untuk melewatinya perlu kesabaran </p>
        </div>
    </div>
</div>
@endsection
