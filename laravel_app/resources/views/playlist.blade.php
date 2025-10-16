@extends('layouts.app')

@section('title', 'Playlist Spotify')

@section('content')
<div class="playlist">
    <h1>Playlist Spotify</h1>

    <div class="playlist-container">
        <div class="playlist-item">
            <a href="https://open.spotify.com/playlist/6rjpCq4vgQutRdUp9tPbgN?si=1374ffbfc58a4943" target="_blank">
                <img src="{{ asset('images/playlist1.png') }}" alt="Playlist 1">
            </a>
            <p>Playlist 1</p>
        </div>

        <div class="playlist-item">
            <a href="https://open.spotify.com/playlist/5BQXCau7pnFqh2s7VfRJof?si=1cce5a29c4c54cda" target="_blank">
                <img src="{{ asset('images/playlist2.png') }}" alt="Playlist 2">
            </a>
            <p>Playlist 2</p>
        </div>

        <div class="playlist-item">
            <a href="https://open.spotify.com/playlist/37i9dQZF1E8Cluk2ZQrRVW" target="_blank">
                <img src="{{ asset('images/playlist3.png') }}" alt="Playlist 3">
            </a>
            <p>Playlist 3</p>
        </div>

        <div class="playlist-item">
            <a href="https://open.spotify.com/playlist/1OnGi8aNFFPWi61CiPMajS" target="_blank">
                <img src="{{ asset('images/playlist4.png') }}" alt="Playlist 4">
            </a>
            <p>Playlist 4</p>
        </div>
    </div>
</div>
@endsection
