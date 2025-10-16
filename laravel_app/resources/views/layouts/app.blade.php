<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Saya')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <!-- Navigasi -->
    <nav>
        <ul>
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Biodata</a></li>
            <li><a href="{{ url('/playlist') }}" class="{{ request()->is('playlist') ? 'active' : '' }}">Playlist</a></li>
            <li><a href="{{ url('/galeri') }}" class="{{ request()->is('galeri') ? 'active' : '' }}">Galeri</a></li>
        </ul>
    </nav>

    <!-- Isi Halaman -->
    <main>
        @yield('content')
    </main>

    <footer style="text-align:center; padding:20px; color:#555;">
        <small>© {{ date('Y') }} | Dibuat oleh Ayu Nirmala</small>
    </footer>
</body>
</html>
