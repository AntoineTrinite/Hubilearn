<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="header">
            @if (Route::has('login'))
                <nav class="header-nav">

                    <h1 class="nav-title"><a class="nav-link" href="{{ url('/') }}">HUBILEARN</a></h1>

                    <div>
                        @auth
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <a class="nav-link" href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        @endif
                        @endauth
                    </div>
                </nav>
            @endif
        </header>
        
        <div class="main-container">
            <div>
                {{ $slot }}
            </div>
        </div>

        <footer>
            <a href="#" class="legal-link">Accessibilité</a>
            <a href="#" class="legal-link">Contact</a>
            <a href="#" class="legal-link">Cookies</a>
            <a href="#" class="legal-link">CGU</a>
            <a href="#" class="legal-link">Mentions légales</a>
        </footer>
    </body>
</html>
