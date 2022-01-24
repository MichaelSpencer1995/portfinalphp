window.addEventListener('scroll', () => handleScroll())

const nav = document.getElementById('nav')
const navBtn = document.querySelectorAll('.nav-btn')
let scrolled = false
let target = 200



if(window.scrollY >= target) {
    scrolled = true
} else {
    navBtn[0].classList.add('hide')
    navBtn[1].classList.add('hide')
}

function handleScroll() {
    if(window.scrollY >= target && !scrolled) {
        scrolled = true
        nav.classList.add('scrolled')
        navBtn[0].classList.remove('hide')
        navBtn[1].classList.remove('hide')
    } else if(window.scrollY < target && scrolled) {
        scrolled = false
        nav.classList.remove('scrolled')
        navBtn[0].classList.add('hide')
        navBtn[1].classList.add('hide')
    }
}