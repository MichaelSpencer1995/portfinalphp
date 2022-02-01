window.addEventListener('scroll', () => handleScroll())

const nav = document.getElementById('nav')
const navBtn = document.querySelectorAll('.nav-btn')
let scrolled = false
let scrolled1 = false
let target = 150



if(window.scrollY >= target) {
    scrolled = true
    nav.classList.add('scrolled')
} else {
    navBtn[0].classList.add('hide')
    navBtn[1].classList.add('hide')
}

function handleScroll() {
    if(window.scrollY >= target && !scrolled) {
        scrolled = true
        nav.classList.add('scrolled')
        nav.classList.remove('preshift')
        navBtn[0].classList.remove('hide')
        navBtn[1].classList.remove('hide')
    } 
    if(window.scrollY < target && scrolled) {
        scrolled = false
        nav.classList.remove('scrolled')
        // nav.classList.remove('position-relative')
        navBtn[0].classList.add('hide')
        navBtn[1].classList.add('hide')
        
    }
}


const navLinks = document.getElementsByClassName('nav-links')
const ctaNav = document.getElementsByClassName('nav-btn')
const ctaHeader = document.getElementsByClassName('header-btn')
navLinks[0].addEventListener('click', () => handleScrollIntoView('about'))
navLinks[1].addEventListener('click', () => handleScrollIntoView('recent-work'))
navLinks[2].addEventListener('click', () => handleScrollIntoView('contact'))
ctaNav[0].addEventListener('click', () => handleScrollIntoView('recent-work'))
ctaNav[1].addEventListener('click', () => handleScrollIntoView('contact'))
ctaHeader[0].addEventListener('click', () => handleScrollIntoView('recent-work'))
ctaHeader[1].addEventListener('click', () => handleScrollIntoView('contact'))
function handleScrollIntoView(target){
    const element = document.getElementById(target)
    element.scrollIntoView({behavior: "smooth", block: "start"})
}