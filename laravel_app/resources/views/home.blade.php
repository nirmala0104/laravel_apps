@extends('layouts.app')

@section('title', 'Biodata')

@section('content')
<div class="biodata-jarak">
    <h1>BIODATA</h1>
    
    <img src="{{ asset('images/Foto Profil.jpg') }}" alt="Foto Profil" class="foto-profil">
    
    <div class="biodata-box">
        <p><strong>Nama:</strong> I Gusti Ayu Nirmala Dewi</p>
        <p><strong>Tempat, Tanggal Lahir:</strong> Pangkalpinang, 01 April 2005</p>
        <p><strong>Jenis Kelamin:</strong> Perempuan</p>
        <p><strong>Agama:</strong> Hindu</p>
        <p><strong>Alamat:</strong> Jl. Sinar Bulan</p>
        <p><strong>Email:</strong> igistiayun6@gmail.com</p>
    </div>

    <div class="map-box">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!3m2!1sid!2sid!4v1740044961202!5m2!1sid!2sid!6m8!1m7!1sXI0WZNVJykp-G96PNX9x_g!2m2!1d-2.154208489151954!2d106.1614842584832!3f15.250478!4f0!5f0.7820865974627469" 
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
</div>
@endsection
