<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hubilearn | Toutes les denières infos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="css/allnews.css" rel="stylesheet">
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
    

    <section class="active-section">

        <h2 class="all-news-title">News</h2>

        <div class="courses-container">
            <!-- Cours card -->
            <a href="/allnews/news" class="course-card">
                <img class="course-img-part" src="./img/actucours.webp" alt="random guy with coding background">
                <div class="course-text-part">
                    <div class="title-part">
                        <span class="course-title">Mise à jour du cours PHP8: Venez découvrir les changements</span>
                    </div>
                        <p class="course-descrition">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Illo cumque molestias quas assumenda doloremque amet temporibus excepturi consequuntur 
                        dicta atque?</p>
                    <div class="time-level-separator">
                        <span class="total-time">Le 31/10/2023</span>
                    </div>
                </div>
            </a>

            <!-- Cours card -->
            <a href="/allnews/news" class="course-card">
                <img class="course-img-part" src="./img/actuenquete.webp" alt="random guy with coding background">
                <div class="course-text-part">
                    <div class="title-part">
                        <span class="course-title">Résultats de l'enquête de la semaine : React toujours gagnant !</span>
                    </div>
                        <p class="course-descrition">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Illo cumque molestias quas assumenda doloremque amet temporibus excepturi consequuntur 
                        dicta atque?</p>
                    <div class="time-level-separator">
                        <span class="total-time">Le 31/10/2023</span>
                    </div>
                </div>
            </a>

            <!-- Cours card -->
            <a href="/allnews/news" class="course-card">
                <img class="course-img-part" src="./img/actulinkedin.webp" alt="random guy with coding background">
                <div class="course-text-part">
                    <div class="title-part">
                        <span class="course-title">Suivez-nous sur linkedin pour plus dinformations</span>
                    </div>
                        <p class="course-descrition">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Illo cumque molestias quas assumenda doloremque amet temporibus excepturi consequuntur 
                        dicta atque?</p>
                    <div class="time-level-separator">
                        <span class="total-time">Le 31/10/2023</span>
                    </div>
                </div>
            </a>
           
        </div>
    </section>
    





    <!-- Overlay à droite en position absolute -->
    <section class="passive-section">
            <span></span>
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