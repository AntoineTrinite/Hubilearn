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
        <link href="css/" rel="stylesheet">
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


        <div class="courses-container">
            <!-- Cours card -->
            <a href="/courses/coursepresentation" class="course-card">
                <img class="course-img-part" src="./img/randomguy.jpg" alt="random guy with coding background">
                <div class="course-text-part">
                    <div class="title-part">
                        <span class="course-title">Débutez en javascript en 20 heures seulement !</span>
                        <div class="note-moyenne">4/5</div>
                    </div>
                    
                    <span class="course-author">Julien Mercier programation web</span>
                        <p class="course-descrition">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Illo cumque molestias quas assumenda doloremque amet temporibus excepturi consequuntur 
                        dicta atque?</p>
                    <div class="time-level-separator">
                        <span class="total-time">22.5 heures au total - </span>
                        <span class="total-level">Tous niveaux</span>
                    </div>
                </div>
            </a>

           <!-- Cours card -->
           <a href="/courses/coursepresentation" class="course-card">
                <img class="course-img-part" src="./img/herbe.jpg" alt="random guy with coding background">
                <div class="course-text-part">
                    <div class="title-part">
                        <span class="course-title">Supprimez sys32 et allez toucher de l'herbe</span>
                        <div class="note-moyenne">2/5</div>
                    </div>
                    
                    <span class="course-author">Jean random</span>
                        <p class="course-descrition">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Illo cumque molestias quas assumenda doloremque amet temporibus excepturi consequuntur 
                        dicta atque?</p>
                    <div class="time-level-separator">
                        <span class="total-time">0.03 heures au total - </span>
                        <span class="total-level">Débutants</span>
                    </div>
                </div>
            </a>

            <!-- Cours card -->
            <a href="/courses/coursepresentation" class="course-card">
                <img class="course-img-part" src="./img/php.jpg" alt="random guy with coding background">
                <div class="course-text-part">
                    <div class="title-part">
                        <span class="course-title">Faire un os avec php ?</span>
                        <div class="note-moyenne">6/5</div>
                    </div>
                    
                    <span class="course-author">Jean possible développeur</span>
                        <p class="course-descrition">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Illo cumque molestias quas assumenda doloremque amet temporibus excepturi consequuntur 
                        dicta atque?</p>
                    <div class="time-level-separator">
                        <span class="total-time">175 heures au total - </span>
                        <span class="total-level">Tous niveaux</span>
                    </div>
                </div>
            </a>

            <!-- Cours card -->
            <a href="/courses/coursepresentation" class="course-card">
                <img class="course-img-part" src="./img/bug.jpg" alt="random guy with coding background">
                <div class="course-text-part">
                    <div class="title-part">
                        <span class="course-title">Élevez les bugs vous même !</span>
                        <div class="note-moyenne">5/5</div>
                    </div>
                    
                    <span class="course-author">Julien Mercier programation web</span>
                        <p class="course-descrition">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Illo cumque molestias quas assumenda doloremque amet temporibus excepturi consequuntur 
                        dicta atque?</p>
                    <div class="time-level-separator">
                        <span class="total-time"> ∞ heures au total - </span>
                        <span class="total-level">Tous niveaux</span>
                    </div>
                </div>
            </a>

            <!-- Cours card -->
            <a href="/courses/coursepresentation" class="course-card">
                <img class="course-img-part" src="./img/python.jpg" alt="random guy with coding background">
                <div class="course-text-part">
                    <div class="title-part">
                        <span class="course-title">Python, comment retirer le venin des sepents efficacement</span>
                        <div class="note-moyenne">1/5</div>
                    </div>
                    
                    <span class="course-author">Julien Mercier programation web</span>
                        <p class="course-descrition">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Illo cumque molestias quas assumenda doloremque amet temporibus excepturi consequuntur 
                        dicta atque?</p>
                    <div class="time-level-separator">
                        <span class="total-time">5 heures au total - </span>
                        <span class="total-level">niveau expert</span>
                    </div>
                </div>
            </a>

            <!-- Cours card -->
            <a href="/courses/coursepresentation" class="course-card">
                <img class="course-img-part" src="./img/error.png" alt="random guy with coding background">
                <div class="course-text-part">
                    <div class="title-part">
                        <span class="course-title"> </span>
                        <div class="note-moyenne">0/5</div>
                    </div>
                    
                    <span class="course-author">Julien Mercier programation web</span>
                        <p class="course-descrition">Comment on met un titre ?</p>
                    <div class="time-level-separator">
                        <span class="total-time"> heures au total - </span>
                        <span class="total-level">Débutants</span>
                    </div>
                </div>
            </a>

            <!-- Cours card -->
            <a href="/courses/coursepresentation" class="course-card">
                <img class="course-img-part" src="./img/table.png" alt="random guy with coding background">
                <div class="course-text-part">
                    <div class="title-part">
                        <span class="course-title">Programmation orienté objet : codons une table !</span>
                        <div class="note-moyenne">4/5</div>
                    </div>
                    
                    <span class="course-author">Arthur charpentier</span>
                        <p class="course-descrition">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Illo cumque molestias quas assumenda doloremque amet temporibus excepturi consequuntur 
                        dicta atque?</p>
                    <div class="time-level-separator">
                        <span class="total-time">51 heures au total - </span>
                        <span class="total-level">Tous niveaux</span>
                    </div>
                </div>
            </a>

            <!-- Cours card -->
            <a href="/courses/coursepresentation" class="course-card">
                <img class="course-img-part" src="./img/vim.png" alt="random guy with coding background">
                <div class="course-text-part">
                    <div class="title-part">
                        <span class="course-title">Mettre les touches de VsCode sur néovim</span>
                        <div class="note-moyenne">3/5</div>
                    </div>
                    
                    <span class="course-author">Julien Mercier programation web</span>
                        <p class="course-descrition">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Illo cumque molestias quas assumenda doloremque amet temporibus excepturi consequuntur 
                        dicta atque?</p>
                    <div class="time-level-separator">
                        <span class="total-time">10 heures au total - </span>
                        <span class="total-level">Tous niveaux</span>
                    </div>
                </div>
            </a>

            <!-- Cours card -->
            <a href="/courses/coursepresentation" class="course-card">
                <img class="course-img-part" src="./img/hack.jpg" alt="random guy with coding background">
                <div class="course-text-part">
                    <div class="title-part">
                        <span class="course-title">Testez les capacités d'un serveur avec les attaques DDOS</span>
                        <div class="note-moyenne">4/5</div>
                    </div>
                    
                    <span class="course-author">Crétin hacker</span>
                        <p class="course-descrition">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Illo cumque molestias quas assumenda doloremque amet temporibus excepturi consequuntur 
                        dicta atque?</p>
                    <div class="time-level-separator">
                        <span class="total-time">22.5 heures au total - </span>
                        <span class="total-level">Tous niveaux</span>
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

    <!-- <script type="text/javascript" src=""></script> -->
    </body>
</html>