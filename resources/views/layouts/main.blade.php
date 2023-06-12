<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">tmitter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tweet.create') }}">Create</a>
                    </li>

                </ul>
            </div>
            <div>
                @auth
                    {{ Auth::user()->name }}
                    <a href="{{route('logout')}}">Logout</a>
                @endauth
                @guest
                    <a href="{{route('login')}}">Login</a>
                @endguest
            </div>
        </div>
    </nav>
</header>

<main class="p-4">
    @yield('content')
</main>
</body>
</html>
