<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hubilearn | Forum</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="css/forum.css" rel="stylesheet">
    </head>
    <body class="">
    <header class="header">
        @if (Route::has('login'))
            <nav class="header-nav">

                <h1 class="nav-title"><a class="nav-link" href="{{ url('/') }}">HUBILEARN</a></h1>

                <div>
                    @auth
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        <x-responsive-nav-link :href="route('logout')" class="nav-link"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                        </x-responsive-nav-link>
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
    

        <section class="active-section">
        
            <div class="forum-part">
                <h2 class="forum-high-title">Général</h2>
                <div class="forum-containers">
                    <div class="forum-container">
                        <span class="forum-title">Informations</span>
                        <div class="forum-date-separator">
                            <span class="forum-info">Dernier post il y a : 1 heure</span>
                            <span class="forum-info">150 Posts</span>
                        </div>
                    </div>
                    <div class="forum-container">
                        <span class="forum-title">Messages à la modération</span>
                        <div class="forum-date-separator">
                            <span class="forum-info">Dernier post il y a : 1 heure</span>
                            <span class="forum-info">150 Posts</span>
                        </div>
                    </div>
                    <div class="forum-container">
                        <span class="forum-title">Aide</span>
                        <div class="forum-date-separator">
                            <span class="forum-info">Dernier post il y a : 1 heure</span>
                            <span class="forum-info">150 Posts</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="forum-part">
                <h2 class="forum-high-title">Cours</h2>
                <div class="forum-containers">
                    <div class="forum-container">
                        <span class="forum-title">Avis</span>
                            <div class="forum-date-separator">
                                <span class="forum-info">Dernier post il y a : 1 heure</span>
                                <span class="forum-info">150 Posts</span>
                        </div>
                    </div>


                </div>
            </div>

            <div class="forum-part">
                <h2 class="forum-high-title">Lives</h2>
                <div class="forum-containers">
                    <div class="forum-container">
                        <span class="forum-title">Lives prévus</span>
                            <div class="forum-date-separator">
                                <span class="forum-info">Dernier post il y a : 1 heure</span>
                                <span class="forum-info">150 Posts</span>
                        </div>
                    </div>


                </div>
            </div>

            <div class="forum-part">
                <h2 class="forum-high-title">Détente</h2>
                <div class="forum-containers">
                    <div class="forum-container">
                        <span class="forum-title">Jeux</span>
                            <div class="forum-date-separator">
                                <span class="forum-info">Dernier post il y a : 1 heure</span>
                                <span class="forum-info">150 Posts</span>
                        </div>
                    </div>

                    <div class="forum-container">
                        <span class="forum-title">Manga</span>
                            <div class="forum-date-separator">
                                <span class="forum-info">Dernier post il y a : 1 heure</span>
                                <span class="forum-info">150 Posts</span>
                            </div>
                    </div>

                    <div class="forum-container">
                        <span class="forum-title">Blabla</span>
                            <div class="forum-date-separator">
                                <span class="forum-info">Dernier post il y a : 1 heure</span>
                                <span class="forum-info">150 Posts</span>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    
    <footer>
        <a href="#" class="legal-link">Accessibilité</a>
        <a href="#" class="legal-link">Contact</a>
        <a href="#" class="legal-link">Cookies</a>
        <a href="#" class="legal-link">CGU</a>
        <a href="#" class="legal-link">Mentions légales</a>
    </footer>

    <!-- <script type="text/javascript" src=""></script> -->
    </body>
</html>