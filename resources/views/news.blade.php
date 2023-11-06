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
    <h2 class="course-main-title">Résultats de l'enquête de la semaine : React encore gagnant !</h2>

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
                Dernièrement, notre plateforme a récemment organisé un concours technologique épique mettant en compétition différentes technologies web. Cette compétition féroce a abouti à une victoire triomphante de React, confirmant ainsi sa suprématie pour la deuxième année consécutive.

                Une Bataille Épique des Technologies Web<br/>

                L'événement tant attendu a réuni les technologies web les plus populaires et les plus innovantes du marché. L'objectif était simple : chaque équipe devait créer une application web exceptionnelle en utilisant l'une des technologies mises en compétition. Les concurrents incluaient Angular, Vue.js, Django, Flask, et bien sûr, React.

                Les développeurs enthousiastes et les aficionados des différentes technologies se sont réunis pour démontrer les avantages de leur plateforme préférée. Chacune des équipes était animée par un esprit de compétition féroce, déterminée à prouver que leur technologie était la meilleure.

                <br/><br/><span class="article-title-text">La Victoire de React : Une Deuxième Fois Consécutive</span><br/><br/>

                Malgré une compétition acharnée, React a réussi à briller à nouveau. L'équipe de développement de React a créé une application web incroyablement performante et réactive qui a impressionné le jury. Grâce à sa facilité d'utilisation, sa polyvalence et sa solide communauté de développeurs, React a conquis les cœurs des juges et du public.

                La victoire de React est d'autant plus remarquable que c'était la deuxième année consécutive que cette technologie remportait le concours. Cela témoigne de sa constance et de sa capacité à s'adapter aux besoins changeants de l'industrie technologique.

                Leçons Apprises et Innovation Continue<br/>

                Le concours a permis aux développeurs et aux professionnels de l'industrie de tirer des leçons importantes. Il a montré que la compétition stimule l'innovation et pousse les technologies web à évoluer constamment pour répondre aux demandes croissantes des utilisateurs.

                Les autres technologies web présentes lors du concours ont également présenté des projets remarquables, démontrant la diversité et la richesse du paysage technologique actuel. Cela montre que chaque technologie a ses avantages et qu'il est important de choisir celle qui correspond le mieux aux besoins spécifiques de chaque projet.

                <br/><br/><span class="article-title-text">Un Avenir Lumineux pour les Technologies Web</span><br/><br/>

                Alors que React célèbre sa deuxième victoire consécutive, les autres technologies web continueront à évoluer et à se développer. Le futur promet de nouvelles avancées, de nouvelles compétitions, et une course perpétuelle vers l'excellence dans le monde en constante évolution des technologies web.

                <br/><br/><span class="article-title-text">Conclusion</span><br/><br/>

                Le concours sur notre plateforme a été un spectacle passionnant pour les amateurs de technologies web du monde entier. La victoire de React, pour la deuxième année consécutive, témoigne de sa domination dans le domaine de développement web. Cependant, il est essentiel de se rappeler que chaque technologie a ses forces, et l'avenir promet une compétition continue, stimulant l'innovation et la croissance de toutes les technologies web. Restez à l'écoute pour les prochains développements passionnants de l'industrie !                
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