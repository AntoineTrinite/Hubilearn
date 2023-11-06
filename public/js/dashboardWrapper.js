document.addEventListener("DOMContentLoaded", function () {
    const personnalSpaceWrappers = document.querySelectorAll(".personnal-space-wrapper");
    const courseSpaces = document.querySelectorAll(".course-space");

    // Fermez le deuxième "course-space" par défaut
    courseSpaces[1].style.display = "none";

    // Affichez le premier "course-space" par défaut
    courseSpaces[0].style.display = "block";

    // Parcourez chaque "personnal-space-wrapper"
    personnalSpaceWrappers.forEach((wrapper, index) => {
        wrapper.addEventListener("click", () => {
            // Masquez tous les "course-space"
            courseSpaces.forEach((space) => {
                space.style.display = "none";
            });

            // Affichez ou masquez le "course-space" correspondant
            courseSpaces[index].style.display = "block";
        });
    });
});
