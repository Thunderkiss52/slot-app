let slideIndex = 0;
const slides = document.querySelector('.banner-slider__slides');
const totalSlides = document.querySelectorAll('.banner-slider__slide').length;

document.querySelector('.banner-slider__control--next').addEventListener('click', () => {
    slideIndex = (slideIndex + 1) % totalSlides;
    slides.style.transform = `translateX(-${slideIndex * 100}%)`;
});

document.querySelector('.banner-slider__control--prev').addEventListener('click', () => {
    slideIndex = (slideIndex - 1 + totalSlides) % totalSlides;
    slides.style.transform = `translateX(-${slideIndex * 100}%)`;
});

// Автослайдер
setInterval(() => {
    slideIndex = (slideIndex + 1) % totalSlides;
    slides.style.transform = `translateX(-${slideIndex * 100}%)`;
}, 5000);
