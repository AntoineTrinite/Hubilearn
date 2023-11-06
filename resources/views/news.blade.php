<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hubilearn | Présentation de cours</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="../css/news.css" rel="stylesheet">
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
    <a href="/allnews" class="backward-link">< Voir toutes les actualités</a>
    <h2 class="course-main-title">Débutez avec Javascript en 20 heures seulement</h2>

    <div class="course-description">
        <div class="first-part-row">
                <img class="news-img" src="../img/actucours.webp" alt="">
                <div class="basic-description">
                    <span class="course-author">Administrateur</span>
                    <span class="total-time">Temps de lecture : 5 minutes</span>
                </div>
        </div>
        
        <div>
            <p class="course-presentation-part-resume">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.<br/><br/>
                
                 - In ipsum earum deleniti. <br/><br/>
                - Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.
                In ipsum earum deleniti. <br/><br/>
                - Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.
                In ipsum earum deleniti. <br/><br/>
                - Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.
                In ipsum earum deleniti. <br/><br/>
                - Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.<br/>
                <br/>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt,Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt,Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.<br/><br/>
                
                 - In ipsum earum deleniti. <br/><br/>
                - Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.
                In ipsum earum deleniti. <br/><br/>
                - Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.<br/>
                <br/>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
            </p>
        </div>
        
    </div>
    </section>
    





    <!-- Overlay à droite en position absolute -->
    <section class="passive-section">
            <span></span>
            <div class="actions-container">
                @if (Route::has('login'))
                    @auth
                        <a href="/courses" class="action-div cours">
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

    <script type="text/javascript" src="./js/coursepresentation.js"></script>
    </body>
</html>