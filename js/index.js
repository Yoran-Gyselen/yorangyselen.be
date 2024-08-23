// Hamburger menu
const hamburgerMenu = document.getElementById('hamburger-menu');
const navMenu = document.getElementById('nav-menu');

hamburgerMenu.addEventListener('click', () => {
  navMenu.classList.toggle('responsive-nav');
});

// Background
let num = Math.floor(Math.random() * 11) + 1;
document.getElementById('background').style.background=`linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("../../images/backgrounds/IMG_${num}.jpg") no-repeat`;

// Animate on scroll
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if(entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});
const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));