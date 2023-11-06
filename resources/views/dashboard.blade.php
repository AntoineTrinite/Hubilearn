<x-app-layout>

    <div class="main-container">
        <section class="active-section">
            <article class="personnal-space-article">
                <div class="personnal-space-wrapper">
                    <h2 class="personnal-space">Espace étudiant</h2>
                    <div class="chevron-wrapper">^</div>
                </div>

                <div class="course-space">

                    <div class="horizontal-divider">
                        <div class="last-course-btn">
                            <span class="sub-title student-title">Débutez avec Javascript en 20 heures seulement</span>
                            <button class="courses-btn add-course">Reprendre mon dernier cours</button>
                        </div>
                       
                        <button class="courses-btn couses-settings">Paramètres de profil</button>
                    </div>

                    <div class="horizontal-divider">
                        <div class="ended-courses">
                            <span class="sub-title">Derniers cours terminés</span>
                            <a href="#" class="stat-area general-view deco">-</a>
                            <a href="#" class="stat-area general-view deco">-</a>
                            <a href="#" class="stat-area general-view deco">-</a>
                        </div>
                        <div class="ended-courses">
                            <span class="sub-title">Sujets crées sur le forum</span>
                            <a href="#" class="stat-area general-view deco variant">-</a>
                            <a href="#" class="stat-area general-view deco variant">-</a>
                            <a href="#" class="stat-area general-view deco variant">-</a>
                        </div>
                    </div>

                    <div class="comment-section">
                    <span class="sub-title student-title">Derniers commentaires</span>
                        <div class="commentaires-container">
                            <div class="commentaires">
                                <div class="com-info">
                                    <div class="course-title">Débutez avec Javascript en 20 heures seulement</div>
                                    <div class="com-date">Le 05/11/2023 à 9h01</div>
                                </div>
                                <p class="comment-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quis.</p>
                                <div class="info-row">
                                    <div class="info-comment">
                                        <div class="info-hover">10 Likes</div>
                                        <div class="info-hover">2 Réponses</div>
                                    </div>
                                    <a class="comment-link" href="#">Voir la page</a>
                                </div>
                            </div>

                            <div class="commentaires">
                                <div class="com-info">
                                    <div class="course-title">Débutez avec Javascript en 20 heures seulement</div>
                                    <div class="com-date">Le 05/11/2023 à 9h01</div>
                                </div>
                                <p class="comment-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quis.</p>
                                <div class="info-row">
                                    <div class="info-comment">
                                        <div class="info-hover">10 Likes</div>
                                        <div class="info-hover">2 Réponses</div>
                                    </div>
                                    <a class="comment-link" href="#">Voir la page</a>
                                </div>
                            </div>

                            <div class="commentaires">
                                <div class="com-info">
                                    <div class="course-title">Débutez avec Javascript en 20 heures seulement</div>
                                    <div class="com-date">Le 05/11/2023 à 9h01</div>
                                </div>
                                <p class="comment-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quis.</p>
                                <div class="info-row">
                                    <div class="info-comment">
                                        <div class="info-hover">10 Likes</div>
                                        <div class="info-hover">2 Réponses</div>
                                    </div>
                                    <a class="comment-link" href="#">Voir la page</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </article>
            
            <article class="personnal-space-article">
                <div class="personnal-space-wrapper">
                    <h2 class="personnal-space">Espace enseignant</h2>
                    <div class="chevron-wrapper">^</div>
                </div>
                <div class="course-space">

                    <div class="horizontal-divider">
                        <button class="courses-btn add-course">Ajouter un cours</button>
                        <button class="courses-btn couses-settings">Gérer mes cours</button>
                    </div>

                    <div class="horizontal-divider">
                        <div>
                            <span class="sub-title">Nombre total de vues</span>
                            <div class="stat-area general-view">-</div>
                        </div>
                        <div>
                            <span class="sub-title">Note générale</span>
                            <div class="stat-area general-note">-/5</div>
                        </div>
                    </div>

                    <div class="advices">
                        <span class="sub-title">Besoin de conseils pour écrire un cours ? Lisez ces articles</span>
                        <div class="advice-container">
                            <a href="#" class="advice">
                                Les 5 étapes à connaître pour faire un cours réussi !
                            </a>
                            <a href="#" class="advice">
                                Comment écrire des articles efficaces
                            </a>
                            <a href="#" class="advice">
                                Créer des exercices simplement avec notre toute nouvelle fonctionnalité !
                            </a> 
                        </div>
                        
                    </div>
                </div>
            </article>
        </section>





    


        <!-- Overlay à droite en position absolute -->
        <section class="passive-section">
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
    </div>

    <footer>
        <a href="#" class="legal-link">Accessibilité</a>
        <a href="#" class="legal-link">Contact</a>
        <a href="#" class="legal-link">Cookies</a>
        <a href="#" class="legal-link">CGU</a>
        <a href="#" class="legal-link">Mentions légales</a>
    </footer>
    <script src="/js/dashboardWrapper.js"></script>
</x-app-layout>
