<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>My Laravel App</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('biodata') }}">Biodata</a> |
        <a href="{{ route('playlist') }}">Playlist</a> |
        <a href="{{ route('galeri') }}">Galeri</a>
    </nav>
    <hr>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
