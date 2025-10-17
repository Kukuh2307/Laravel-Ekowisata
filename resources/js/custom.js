// === AOS Initialization ===
AOS.init({
  duration: 800,
  once: true,
  offset: 100,
});

// === Mobile Menu Toggle ===
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');

if (hamburger && mobileMenu) {
  hamburger.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    const icon = hamburger.querySelector('i');
    icon.classList.toggle('fa-bars');
    icon.classList.toggle('fa-times');
  });
}

// === Navbar Scroll Effect ===
window.addEventListener('scroll', () => {
  const navbar = document.getElementById('navbar');
  if (navbar) {
    if (window.scrollY > 50) {
      navbar.style.background = 'rgb(5, 150, 105)';
      navbar.style.boxShadow = '0 5px 4px rgba(0, 0, 0, 0.1)';
      navbar.style.backdropFilter = 'blur(10px)';
    } else {
      navbar.style.background = 'transparent';
      navbar.style.boxShadow = '';
      navbar.style.backdropFilter = '';
    }
  }
});

// === Hero Slider ===
const slides = document.querySelectorAll('.hero-slide');
const dots = document.querySelectorAll('.slider-dot');
const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');

let currentSlide = 0;
const totalSlides = slides.length;

function showSlide(index) {
  slides.forEach(slide => slide.classList.remove('active'));
  dots.forEach(dot => dot.classList.remove('active'));
  currentSlide = (index + totalSlides) % totalSlides;
  slides[currentSlide].classList.add('active');
  dots[currentSlide].classList.add('active');
}

function nextSlide() { showSlide(currentSlide + 1); }
function prevSlide() { showSlide(currentSlide - 1); }

if (slides.length > 0) {
  let autoSlide = setInterval(nextSlide, 5000);
  
  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      nextSlide();
      clearInterval(autoSlide);
      autoSlide = setInterval(nextSlide, 5000);
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      prevSlide();
      clearInterval(autoSlide);
      autoSlide = setInterval(nextSlide, 5000);
    });
  }

  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      showSlide(index);
      clearInterval(autoSlide);
      autoSlide = setInterval(nextSlide, 5000);
    });
  });
}

// === Dropdown Menu (klik) ===
document.addEventListener('DOMContentLoaded', function () {
  const dropdownButton = document.getElementById('dropdownButton');
  const dropdownMenu = document.getElementById('dropdownMenu');
  const dropdownIcon = dropdownButton?.querySelector('i');

  if (dropdownButton && dropdownMenu) {
    dropdownButton.addEventListener('click', function (event) {
      event.stopPropagation(); // cegah bubbling
      dropdownMenu.classList.toggle('hidden');
      dropdownIcon?.classList.toggle('rotate-180');
    });

    // Tutup dropdown jika klik di luar area menu
    window.addEventListener('click', function (event) {
      if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.add('hidden');
        dropdownIcon?.classList.remove('rotate-180');
      }
    });
  }
});
