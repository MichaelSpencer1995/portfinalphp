window.addEventListener('scroll', () => handleScroll())

const nav = document.getElementById('nav')
const navBtn = document.querySelectorAll('.nav-btn')
let scrolled = false
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
        navBtn[0].classList.remove('hide')
        navBtn[1].classList.remove('hide')
    } else if(window.scrollY < target && scrolled) {
        scrolled = false
        nav.classList.remove('scrolled')
        navBtn[0].classList.add('hide')
        navBtn[1].classList.add('hide')
    }
}


const navLinks = document.getElementsByClassName('nav-links')
navLinks[0].addEventListener('click', () => handleScrollIntoView('about'))
navLinks[1].addEventListener('click', () => handleScrollIntoView('about'))
navLinks[2].addEventListener('click', () => handleScrollIntoView('about'))
function handleScrollIntoView(target){
    const element = document.getElementById(target)
    element.scrollIntoView({behavior: "smooth", block: "start"})
}

function submitForm() {
    // const submitBtn = document.getElementById('submit-form')
    const form = document.getElementById('form')
    // submitBtn.disabled = true
    // form.submit()
    // submitBtn.disabled = false
    // return true
    console.log('so nsssice')
    form.method = 'post'
    form.submit()
}
