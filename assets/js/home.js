
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.nav-dot');
const arrowLeft = document.querySelector('.arrow-left');
const arrowRight = document.querySelector('.arrow-right');
let currentSlide = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
        dots[i].classList.toggle('active', i === index);
    });
    currentSlide = index;
}

function nextSlide() {
    let next = (currentSlide + 1) % slides.length;
    showSlide(next);
}

function prevSlide() {
    let prev = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(prev);
}

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => showSlide(index));
});

arrowLeft.addEventListener('click', prevSlide);
arrowRight.addEventListener('click', nextSlide);

// Auto-slide every 5 seconds
setInterval(nextSlide, 5000);





