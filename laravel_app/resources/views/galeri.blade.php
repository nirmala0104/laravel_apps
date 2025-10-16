@extends('layouts.app')

@section('content')
<h2>Galeri Pendakian</h2>

<div class="galeri-container">
@foreach($galeris as $g)
    <div class="galeri-item">
        <p>{{ $g->judul }}</p>
        <img src="{{ asset('images/' . $g->gambar) }}" width="300">
    </div>
@endforeach
</div>
@endsection
