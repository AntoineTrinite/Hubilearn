<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hubilearn | Accueil</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="">
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
        <div class="row-container">
            <a href="/allnews/news" class="gal-container">
                <img class="gal-image" id="image" src="img/actucours.webp" alt="">
                <div class="img-filter"></div>
                <span class="gal-title" id="title">Mise à jour du cours PHP 8 : venez découvrir les changements</span>
                <div class="gal-btns">
                    <input type="radio" class="img-selector" name="imgSelector" id="radio1" checked />
                    <input type="radio" class="img-selector" name="imgSelector" id="radio2" />
                    <input type="radio" class="img-selector" name="imgSelector" id="radio3" />
                </div>
            </a>

            <div class="actions-container">
                @if (Route::has('login'))
                    @auth
                        <a href="#" class="action-div cours">
                            <span class="action-title">Reprendre le dernier cours</span>
                            <div class="action-row">
                                <p class="action-text">Débuter avec javascript en 20 heures</p>
                                <span class="action-progression">20%</span>
                            </div>
                        </a>
                    @else
                        <a href="/courses" class="action-div cours">
                            <span class="action-title">Progression - Non connecté</span>
                            <div class="action-row">
                                <p class="action-text">commencez un cours pour voir sa progression</p>
                                <span class="action-progression">?? %</span>
                            </div>
                        </a>
                    @endauth
                @endif
        
                <a href="/forum" class="action-div forum">
                    <span class="action-title">Aller sur le forum</span>
                    <div class="action-row">
                        <span class="action-info">200 utilisteurs actifs</span>
                    </div>
                </a>
                <a href="/lives" class="action-div live">
                    <span class="action-title">Voir un cours en live</span>
                    <div class="action-row">
                        <span class="action-info">20 live actuellement en cours</span>
                    </div>
                </a>
            </div>
        </div>


        <div class="motivation-container">
            <span class="motivation-text">
                Rejoignez-nous et apprenez ou enseignez tout ce dont vous rêvez !
            </span>
        </div>
    </div>
    
    <footer>
        <a href="#" class="legal-link">Accessibilité</a>
        <a href="#" class="legal-link">Contact</a>
        <a href="#" class="legal-link">Cookies</a>
        <a href="#" class="legal-link">CGU</a>
        <a href="#" class="legal-link">Mentions légales</a>
    </footer>

    <script type="text/javascript" src="js/home.js"></script>
    </body>
</html>