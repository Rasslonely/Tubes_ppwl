let currentIndex = 0;

function showSlide(index) {
    const slides = document.querySelector('.slides');
    const slideWidth = document.querySelector('.slide').offsetWidth;

    slides.style.transform = `translateX(${-index * slideWidth}px)`;
    currentIndex = index;
}

function nextSlide() {
    const totalSlides = document.querySelectorAll('.slide').length;
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
}

function prevSlide() {
    
    const totalSlides = document.querySelectorAll('.slide').length;
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    showSlide(currentIndex);
}

showSlide(currentIndex);

document.addEventListener("scroll", function() {
    var mainHeader = document.querySelector('.navbar-container');;
    var scrolled = window.scrollY;

    if (scrolled > 40) {
        mainHeader.classList.add('scrolled');
    } else{
        mainHeader.classList.remove('scrolled');
    }
});

const navbarToggle = document.querySelector('.navbar-toggle input');
const navbar = document.querySelector('.navbar-ul');

navbarToggle.addEventListener('click', function() {
    navbar.classList.toggle('slide');
});
