<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @stack('styles')
</head>
<body>
    <nav class="main-nav">
        <a href="{{ route('admin.index') }}">Produse</a>
        <a href="{{ route('admin.create') }}">Adauga Produs</a>
    </nav>
    @yield('content')
    <footer>
        <div class="autor">
            Nume, prenume, email, grupa
        </div>
    </footer>
    @stack('scripts')
</body>
</html>