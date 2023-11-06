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
        <link href="../../css/coursesession.css" rel="stylesheet">
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
    <h2 class="course-main-title">Débutez avec Javascript en 20 heures seulement</h2>
    <h3 class="course-main-subtitle">Partie 1 - syntaxe de base</h3>
    <div class="course">
        <div class="video-presentation-part">
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/VOTRE_CODE_D'INTÉGRATION" frameborder="0" allowfullscreen></iframe>
            <div class="navigation-btns">
                <button class="nav-btn nav-btn-left"><</button>
                <button class="nav-btn nav-btn-right">></button>
            </div>
        </div>
        



        <!-- Partie non nécessaire à modifier -->
        <div>
            <h3 class="course-presentation-part-title">Explications</h3>
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
            </p>
        </div>
        
        <div>
            <h3 class="course-presentation-part-title">Exercices</h3>

            <div class="course-exercice">

                <div class="course-exercice-card">
                    <span class="course-exercice-title">QCM - La syntaxe de base</span>
                    <button class="course-exercice-btn">Faire l'exercice</button>
                </div>

                <div class="course-exercice-card">
                    <span class="course-exercice-title">Trouvez les erreurs !</span>
                    <button class="course-exercice-btn">Faire l'exercice</button>
                </div>
                
            </div>

            <p class="course-presentation-part-resume">
                <span class="course-presentation-part-resume-title">Description</span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi magni deserunt, 
                repellat voluptatum molestias aliquid harum? In ipsum earum deleniti. 
                Dicta similique inventore nulla eligendi quae doloribus autem eaque possimus.
            </p>
        </div>
        

        <div class="session-cards">
            <h3 class="course-presentation-part-title">Les cours</h3>
            <div class="course-presentation-card">
                <div class="course-presentation-chapter">
                    <span class="course-presentation-chapter-title">Partie 1 - syntaxe de base</span>
                    <button class="course-chapter-toggle-btn">^</button>
                </div>
                <div class="course-presentation-chapter-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                    <div class="btn-axer">
                        <a href="/courses/coursepresentation/coursesession" class="course-presentation-chapter-btn">Voir ce cours</a>
                    </div>
                    
                </div>
            </div>

            <div class="course-presentation-card">
                <div class="course-presentation-chapter">
                    <span class="course-presentation-chapter-title">Partie 2 - Les boucles</span>
                    <button class="course-chapter-toggle-btn">^</button>
                </div>
                <div class="course-presentation-chapter-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                    <div class="btn-axer">
                        <a href="/courses/coursepresentation/coursesession" class="course-presentation-chapter-btn">Voir ce cours</a>
                    </div>
                    
                </div>
            </div>

            <div class="course-presentation-card">
                <div class="course-presentation-chapter">
                    <span class="course-presentation-chapter-title">Partie 3 - Les conditions</span>
                    <button class="course-chapter-toggle-btn">^</button>
                </div>
                <div class="course-presentation-chapter-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                    <div class="btn-axer">
                        <a href="/courses/coursepresentation/coursesession" class="course-presentation-chapter-btn">Voir ce cours</a>
                    </div>
                    
                </div>
            </div>

            <div class="course-presentation-card">
                <div class="course-presentation-chapter">
                    <span class="course-presentation-chapter-title">Partie 4 - les classes</span>
                    <button class="course-chapter-toggle-btn">^</button>
                </div>
                <div class="course-presentation-chapter-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                    <div class="btn-axer">
                        <a href="/courses/coursepresentation/coursesession" class="course-presentation-chapter-btn">Voir ce cours</a>
                    </div>
                    
                </div>
            </div>

            <div class="course-presentation-card">
                <div class="course-presentation-chapter">
                    <span class="course-presentation-chapter-title">Partie 5 - La programmation OOP</span>
                    <button class="course-chapter-toggle-btn">^</button>
                </div>
                <div class="course-presentation-chapter-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                    <div class="btn-axer">
                        <a href="/courses/coursepresentation/coursesession" class="course-presentation-chapter-btn">Voir ce cours</a>
                    </div>
                    
                </div>
            </div>

            <div class="course-presentation-card">
                <div class="course-presentation-chapter">
                    <span class="course-presentation-chapter-title">Partie 6 - La programmation asynchrone</span>
                    <button class="course-chapter-toggle-btn">^</button>
                </div>
                <div class="course-presentation-chapter-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                    <div class="btn-axer">
                        <a href="/courses/coursepresentation/coursesession" class="course-presentation-chapter-btn">Voir ce cours</a>
                    </div>
                    
                </div>
            </div>

            <div class="course-presentation-card">
                <div class="course-presentation-chapter">
                    <span class="course-presentation-chapter-title">Partie 7 - Construisons une vraie application</span>
                    <button class="course-chapter-toggle-btn">^</button>
                </div>
                <div class="course-presentation-chapter-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus Lorem ipsum 
                        dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, necessitatibus?</p>
                    <div class="btn-axer">
                        <a href="/courses/coursepresentation/coursesession" class="course-presentation-chapter-btn">Voir ce cours</a>
                    </div>
                    
                </div>
            </div>
        </div>

        

        <div class="author-presentation">
            <h3 class="course-presentation-part-title">Présentation de l'auteur</h3>
            <div class="author-part">    
                <div class="author-main">
                    <img class="profile-picture" src="../../img/profilepic.jpg" alt="profile picture">
                    <div class="profile-description">
                        <span class="course-author-2">Julien Mercier programation web</span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Culpa, nobis perferendis magni vitae nostrum esse iure deserunt amet ipsa 
                            nisi dolore obcaecati, omnis sit nam.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Culpa, nobis perferendis magni vitae nostrum esse iure deserunt amet ipsa 
                            nisi dolore obcaecati, omnis sit nam.
                        </p>
                    </div>
                    
                </div>
            

            </div>
            
        </div>

        

        <div class="comment-container">
            <h3 class="course-presentation-part-title">Commentaires</h3>

            <form action="#" method="post" class="commentaire-form">
                <label class="comment-labels" for="title">Titre</label>
                <input class="comment-input" type="text" name="title" placeholder="Ajoutez ici un titre">

                <label class="comment-labels comment-labels-text" for="comment">Commentaire</label>
                <textarea class="comment-input comment-text-input" name="comment" rows="4" cols="50" placeholder="Écrivez ici un commentaire ..."></textarea>
                <div class="comment-input-send">
                    <input class="btn-input-send" type="button" value="Envoyer">
                </div>
                
            </form>

            <div class="all-comments">
                <!-- comment -->
                <div class="comment">
                    <div class="comment-details">
                        <div class="comment-details-first-part">
                            <a class="comment-author-link" href="#"><img class="comment-profile-pic" src="../../img/profilepic.jpg" alt=""></a>
                            <div class="comment-details-first-part-text">
                                <span class="comment-title">Un cours intéressant mais ...</span>
                                <a class="comment-author-link" href="#"><span class="comment-author">John doe</span></a>
                            </div>
                        </div>
                        <div class="note-comment">4/5</div>
                    </div>      
                    <p class="comment-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Culpa, nobis perferendis magni vitae nostrum esse iure deserunt amet ipsa 
                        nisi dolore obcaecati, omnis sit nam.
                    </p>
                </div>

                <!-- comment -->
                <div class="comment">
                    <div class="comment-details">
                        <div class="comment-details-first-part">
                            <a class="comment-author-link" href="#"><img class="comment-profile-pic" src="../../img/profilepic.jpg" alt=""></a>
                            <div class="comment-details-first-part-text">
                                <span class="comment-title">La partie 3 ne correspond pas trop ...</span>
                                <a class="comment-author-link" href="#"><span class="comment-author">John doe</span></a>
                            </div>
                        </div>
                        <div class="note-comment">4/5</div>
                    </div>      
                    <p class="comment-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Culpa, nobis perferendis magni vitae nostrum esse iure deserunt amet ipsa 
                        nisi dolore obcaecati, omnis sit nam.ipsum dolor sit amet consectetur adipisicing elit. 
                        Culpa, nobis perferendis magni vitae nostrum esse iure deserunt amet ipsa 
                        nisi dolore obcaecati, omnis sit nam.ipsum dolor sit amet consectetur adipisicing elit. 
                        Culpa, nobis perferendis magni vitae nostrum esse iure deserunt amet ipsa 
                        nisi dolore obcaecati, omnis sit nam.
                    </p>
                </div>

                <!-- comment -->
                <div class="comment">
                    <div class="comment-details">
                        <div class="comment-details-first-part">
                            <a class="comment-author-link" href="#"><img class="comment-profile-pic" src="../../img/profilepic.jpg" alt=""></a>
                            <div class="comment-details-first-part-text">
                                <span class="comment-title">Pourquoi la partie 3 ?</span>
                                <a class="comment-author-link" href="#"><span class="comment-author">John doe</span></a>
                            </div>
                        </div>
                        <div class="note-comment">4/5</div>
                    </div>      
                    <p class="comment-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Culpa, nobis perferendis magni vitae nostrum esse iure deserunt amet ipsa 
                        nisi dolore obcaecati, omnis sit nam.ipsum dolor sit amet consectetur adipisicing elit. 
                        Culpa, nobis perferendis magni vitae nostrum esse iure deserunt amet ipsa 
                        nisi dolore obcaecati, omnis sit nam.
                    </p>
                </div>

                <!-- comment -->
                <div class="comment">
                    <div class="comment-details">
                        <div class="comment-details-first-part">
                            <a class="comment-author-link" href="#"><img class="comment-profile-pic" src="../../img/profilepic.jpg" alt=""></a>
                            <div class="comment-details-first-part-text">
                                <span class="comment-title">Un cours trop rapide</span>
                                <a class="comment-author-link" href="#"><span class="comment-author">John doe</span></a>
                            </div>
                        </div>
                        <div class="note-comment">4/5</div>
                    </div>      
                    <p class="comment-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Culpa, nobis perferendis magni vitae nostrum esse iure deserunt amet ipsa 
                        nisi dolore obcaecati, omnis sit nam.ipsum dolor sit amet consectetur adipisicing elit. 
                        Culpa, nobis perferendis magni vitae
                    </p>
                </div>

                <!-- comment -->
                <div class="comment">
                    <div class="comment-details">
                        <div class="comment-details-first-part">
                            <a class="comment-author-link" href="#"><img class="comment-profile-pic" src="../../img/profilepic.jpg" alt=""></a>
                            <div class="comment-details-first-part-text">
                                <span class="comment-title">J'ai pu obtenir un travail grâce à ce cours !</span>
                                <a class="comment-author-link" href="#"><span class="comment-author">John doe</span></a>
                            </div>
                        </div>
                        <div class="note-comment">4/5</div>
                    </div>      
                    <p class="comment-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Culpa, nobis perferendis magni vitae nostrum esse iure deserunt amet ipsa 
                        nisi dolore obcaecati, omnis sit nam.ipsum dolor sit amet consectetur adipisicing elit. 
                        Culpa, nobis perferendis magni vitae nostrum esse iure deserunt amet ipsa 
                        nisi dolore obcaecati, omnis sit nam.
                    </p>
                </div>
            </div>
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

        <script type="text/javascript" src="../../js/coursesession.js"></script>
    </body>
</html>