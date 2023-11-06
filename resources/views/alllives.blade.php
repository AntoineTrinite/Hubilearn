<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hubilearn | Lives</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="css/alllives.css" rel="stylesheet">
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
        <div class="secondary-search-bar">
        <button class="go-left-btn"><</button>
            <div class="tri-btn-group">
                <button class="tri-btn">javascript</button>
                <button class="tri-btn">C#</button>
                <button class="tri-btn">ReactJs</button>
                <button class="tri-btn">PHP</button>
                <button class="tri-btn">javascript</button>
                <button class="tri-btn">C#</button>
                <button class="tri-btn">ReactJs</button>
                <button class="tri-btn">PHP</button>
                <button class="tri-btn">javascript</button>
                <button class="tri-btn">C#</button>
                <button class="tri-btn">ReactJs</button>
                <button class="tri-btn">PHP</button>
            </div>
            <button class="go-right-btn">></button>
        </div>
            <div class="forum-part">
                <h2 class="forum-high-title">Tous les lives</h2>
                <div class="forum-containers">
                    <div class="forum-container">
                        <span class="forum-title">Apprenons le css avec SASS !</span>
                        <div class="forum-date-separator">
                            <span class="forum-info">15 Viewer</span>
                            <span class="forum-info">Commencé il y a : 1 heure</span>
                        </div>
                    </div>
                    <div class="forum-container">
                        <span class="forum-title">Jeux vidéos: comment réfléchir au développement de son jeu</span>
                        <div class="forum-date-separator">
                            <span class="forum-info">15 Viewer</span>
                            <span class="forum-info">Commencé il y a : 1 heure</span>
                        </div>
                    </div>
                    <div class="forum-container">
                        <span class="forum-title">Le langage C: On commence !</span>
                        <div class="forum-date-separator">
                            <span class="forum-info">15 Viewer</span>
                            <span class="forum-info">Commencé il y a : 1 heure</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="forum-high-title-ask">Vous voulez faire un live ? Rapprochez vous de la modération pour en discuter ! <a href="#">Ici</a></h2>
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