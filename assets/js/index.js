let menuMobile = document.querySelector('.navbar .navbar-container')
let toggle = document.querySelector('.toggle')
let close = document.querySelector('.close-btn')
// custom.js

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");
    const links = document.querySelectorAll(".navbar li a");

    const changeNavbarOnScroll = () => {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
            links.forEach(link => link.classList.add("scrolled"));
        } else {
            navbar.classList.remove("scrolled");
            links.forEach(link => link.classList.remove("scrolled"));
        }
    };

    changeNavbarOnScroll();
    window.addEventListener("scroll", changeNavbarOnScroll);
});

const headerLinks = document.querySelectorAll('.navbar a[href^="#"]');
headerLinks.forEach(link => {
    link.addEventListener('click', (e) => { // Pass the event object as an argument
        smoothScroll.call(link, e); // Call smoothScroll with the link as 'this' and pass the event object
        menuMobile.classList.remove('zero');
    });
});

// Smooth scroll to anchor
function smoothScroll(e) {
    e.preventDefault();

    const targetId = e.target.getAttribute('href'); // Use 'e.target' instead of 'this'
    const targetSection = document.querySelector(targetId);
    const headerHeight = document.querySelector('.navbar').offsetHeight;
    const targetOffsetTop = targetSection.offsetTop - headerHeight; // Calculate the target offset top

    window.scrollTo({
        top: targetOffsetTop,
        behavior: 'smooth'
    });
}



const toggleOpen = () => {
    toggle.addEventListener('click', () => {
        menuMobile.classList.add('zero')
    })
}
toggleOpen();

const closeHandle = () => {
    close.addEventListener('click', () => {
        menuMobile.classList.remove('zero')
    })
}
closeHandle()