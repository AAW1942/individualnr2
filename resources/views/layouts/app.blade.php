<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @stack('styles')
</head>
<body>
    <nav class="main-nav">
        <a href="#">Electronics</a>
        <a href="#">Appliances</a>
        <a href="#">Childen's goods</a>
        <a href="#">Repairs</a>
        <a href="#">Clothes</a>
        <a href="#">Footwear</a>
        <a href="#">Beauty</a>
    </nav>
    @yield('content')
    <footer>
        <div class="autor">
            Nume, prenume, email, grupa
        </div>
        <nav class="bottom-nav">
            <a href="#">Mobile version</a>
            <a href="#">Statistics</a>
            <a href="#">Adverstising</a>
        </nav>
    </footer>
    @stack('scripts')
</body>
</html>