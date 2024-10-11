<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite("resources/css/app.css")
</head>
<body>
    <header>
        <h1>{{ config('app.name') }}</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Acasa</a></li>
                <li><a href="{{ route('about') }}">Despre noi</a></li>
                <li><a href="{{ route('tasks.index') }}">Taskuri</a></li>
                <li><a href="{{ route('tasks.create') }}">Creaza Taskuri</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
