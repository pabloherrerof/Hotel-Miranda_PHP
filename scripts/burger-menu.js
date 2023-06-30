const burger = document.querySelector('.nav__burger');
const nav = document.querySelector('.nav__list');
const navLogo = document.querySelector('.nav__logo');
const header = document.querySelector('.header')


function toggleNav() {
    burger.classList.toggle('nav__burger');
    burger.classList.toggle('nav__burger--close');
    nav.classList.toggle('nav__list--active');
}

burger.addEventListener('click', function () {
    toggleNav();
});


navLogo.addEventListener('click', function (){
    window.location.href = "/index"
})



window.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY || document.documentElement.scrollTop;
    const windowWidth = window.innerWidth;

    if (windowWidth >= 1000 && scrollPosition > window.innerHeight) {
      header.style.visibility = "hidden";
    } else {
      header.style.visibility = "visible"
    }
  });
  
  window.addEventListener('mousemove', function(event) {
    const mouseY = event.clientY;
    const windowWidth = window.innerWidth;


    if (windowWidth>= 1000 && mouseY < 150) {
        header.style.visibility = "visible"
    } 
  });
  
  
  