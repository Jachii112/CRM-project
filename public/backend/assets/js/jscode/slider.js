
let currentSlide = 1;

function showSlide(slideIndex) {
    if (slideIndex < 1) {
        currentSlide = 4;
    } else if (slideIndex > 4) {
        currentSlide = 1;
    }

    for (let i = 1; i <= 4; i++) {
        document.getElementById(`slide${i}`).checked = false;
    }

    document.getElementById(`slide${currentSlide}`).checked = true;
}

function autoPlay() {
    currentSlide++;
    showSlide(currentSlide);
}

setInterval(autoPlay, 5000);
