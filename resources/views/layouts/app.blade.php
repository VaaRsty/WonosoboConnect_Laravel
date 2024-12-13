<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layanan.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('permohonan.index') }}">Permohonan</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer>
        <p>© 2024 Wonosobo Connect</p>
    </footer>
</body>
</html>
