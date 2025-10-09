
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


const faqItems = document.querySelectorAll('.faq-item');

// for faq
faqItems.forEach(item => {
    item.querySelector('.faq-question').addEventListener('click', () => {
        item.classList.toggle('active');
        const answer = item.querySelector('.faq-answer');
        if (item.classList.contains('active')) {
            answer.style.display = 'block';
        } else {
            answer.style.display = 'none';
        }
    });
});


// for contact form 
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Show success message
    const successMessage = document.getElementById('successMessage');
    successMessage.classList.add('show');

    // Reset form
    this.reset();

    // Hide success message after 5 seconds
    setTimeout(() => {
        successMessage.classList.remove('show');
    }, 5000);
});

// Add smooth animations for form inputs
const inputs = document.querySelectorAll('input, textarea, select');
inputs.forEach(input => {
    input.addEventListener('focus', function () {
        this.parentElement.style.transform = 'translateY(-2px)';
    });

    input.addEventListener('blur', function () {
        this.parentElement.style.transform = 'translateY(0)';
    });
});