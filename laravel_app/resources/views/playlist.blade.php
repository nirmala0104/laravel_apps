@extends('layouts.app')

@section('content')
<h2>Playlist</h2>

<div class="playlist-container">
@foreach($playlists as $p)
    <div class="playlist-item">
        <h3>{{ $p->judul }}</h3>
        <iframe src="{{ $p->link }}" width="300" height="380" frameborder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
    </div>
@endforeach
</div>
@endsection
