window.addEventListener('scroll', () => handleScroll())

const nav = document.getElementById('nav')
const aboutP = document.getElementById('about-p')
const aboutH2 = document.getElementById('about-h2')
const navBtn = document.querySelectorAll('.nav-btn')
let scrolled = false
let aboutSection = {
    h2: {
        target: 250,
        scrolled: false
    },
    p: {
        target: 350,
        scrolled: false
    }
}
let navTarget = 150



if(window.scrollY >= navTarget) {
    scrolled = true
    nav.classList.add('return-nav')
} else {
    nav.classList.remove('return-nav')
}

function handleScroll() {
    if(window.scrollY >= navTarget && !scrolled) {
        scrolled = true
        nav.classList.add('return-nav')

    } 
    if(window.scrollY < navTarget && scrolled) {
        scrolled = false
        nav.classList.remove('return-nav') 
    }

    // if(window.scrollY >= aboutSection.h2.target && !aboutSection.h2.scrolled) {
    //     aboutSection.h2.scrolled =  true
    //     aboutH2.classList.add('return-element')
    // } 
    // if(window.scrollY < aboutSection.h2.target && aboutSection.h2.scrolled) {
    //     aboutSection.h2.scrolled =  false
    //     aboutH2.classList.remove('return-element')        
    // }

    // if(window.scrollY >= aboutSection.p.target && !aboutSection.p.scrolled) {
    //     aboutSection.p.scrolled =  true
    //     aboutP.classList.add('return-element')
    // } 
    // if(window.scrollY < aboutSection.p.target && aboutSection.p.scrolled) {
    //     aboutSection.p.scrolled =  false
    //     aboutP.classList.remove('return-element')        
    // }
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