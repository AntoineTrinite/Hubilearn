const chapterElements = document.querySelectorAll(".course-presentation-chapter");

// Parcourez chaque élément "course-presentation-chapter"
chapterElements.forEach((chapter) => {
    // Ajoutez un gestionnaire d'événements de clic à chaque élément "course-presentation-chapter"
    chapter.addEventListener("click", () => {
        // Trouvez l'élément "course-presentation-chapter-text" correspondant
        const chapterText = chapter.nextElementSibling;

        // Vérifiez si la section est actuellement visible
        const isVisible = chapterText.style.display === "block";

        // Fermez toutes les sections
        chapterElements.forEach((ch) => {
            const chText = ch.nextElementSibling;
            chText.style.display = "none";
        });

        // Ouvrez la section si elle est fermée, sinon fermez-la
        if (!isVisible) {
            chapterText.style.display = "block";
        }
    });
});