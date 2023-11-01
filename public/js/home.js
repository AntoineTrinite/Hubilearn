const imagesData = [
    {
        imageSrc: "./img/actucours.webp",
        title: "Mise à jour du cours PHP 8 : venez découvrir les changements",
        link: "/allnews/news",
    },
    {
        imageSrc: "./img/actuenquete.webp",
        title: "Résultats de l'enquête de la semaine",
        link: "/allnews/news",
    },
    {
        imageSrc: "./img/actulinkedin.webp",
        title: "Suivez nous sur Linkedin pour plus d'actus !",
        link: "/allnews/news",
    },
];

const img = document.getElementById('image');
const imgTitle = document.getElementById('title');
const imgSelector = document.querySelectorAll('.img-selector');
let currentIndex = 0;

function updateImage(index) {
    img.src = imagesData[index].imageSrc;
    imgTitle.textContent = imagesData[index].title;
    imgTitle.href = imagesData[index].link;
}

function autoChangeImage() {
    currentIndex = (currentIndex + 1) % imagesData.length;
    updateImage(currentIndex);

    // Mettre à jour le bouton radio actif
    imgSelector[currentIndex].checked = true;
}

imgSelector.forEach((radio, index) => {
    radio.addEventListener('change', () => {
        currentIndex = index;
        updateImage(currentIndex);
    });
});

setInterval(autoChangeImage, 3000);