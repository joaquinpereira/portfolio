import './bootstrap';

// toggle icon navbar
let menuIcon = document.querySelector('#menu-icon');
let navBar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navBar.classList.toggle('active');
}

// scroll sections active link
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(section => {
        let top = window.scrollY;
        let offset = section.offsetTop - 150;
        let height = section.offsetHeight;
        let id = section.getAttribute('id');

        if(top >= offset && top < (offset + height)){
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector('header nav a[href*='+id+']').classList.add('active');
        }
    });

    // sticky navbar
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

    // remove toggle icon and navbar when click navbar link (scroll)
    menuIcon.classList.remove('bx-x');
    navBar.classList.remove('active');
};

// scroll reveal
ScrollReveal({
    reset: true,
    distance: '20px',
    duration: 2000,
    delay:200
});

ScrollReveal().reveal('.home-content, .heading', { origin: 'top', mobile: false });
ScrollReveal().reveal('.home-img, .skills-container, .portfolio-box, .contact form', { origin: 'bottom', mobile: false });
ScrollReveal().reveal('.home-content h1, .about-img', { origin: 'left', mobile: false });
ScrollReveal().reveal('.home-content p, .about-content', { origin: 'right', mobile: false });

//typed js
if(!window.matchMedia('only screen and (max-width: 768px)').matches){
    const typed = new Typed('.multiple-text', {
        strings: ['FullStack Developer','Backend Developer'],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        loop: true
    });
}

