/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
  navToggle = document.getElementById('nav-toggle'),
  navClose = document.getElementById('nav-close')

/* Menu show */
navToggle.addEventListener('click', () => {
  navMenu.classList.add('show-menu')
})

/* Menu hidden */
navClose.addEventListener('click', () => {
  navMenu.classList.remove('show-menu')
})

/*=============== SEARCH ===============*/
// const search = document.getElementById('search'),
//       searchBtn = document.getElementById('search-btn'),
//       searchClose = document.getElementById('search-close')

// /* Search show */
// searchBtn.addEventListener('click', () =>{
//    search.classList.add('show-search')
// })

// /* Search hidden */
// searchClose.addEventListener('click', () =>{
//    search.classList.remove('show-search')
// })

/*=============== LOGIN ===============*/
const login = document.getElementById('login'),
  loginBtn = document.getElementById('login-btn'),
  loginClose = document.getElementById('login-close')

/* Login show */
loginBtn.addEventListener('click', () => {
  login.classList.add('show-login')
})

/* Login hidden */
loginClose.addEventListener('click', () => {
  login.classList.remove('show-login')
})

/* Slide Image */
let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function () {
  active = active + 1 <= lengthItems ? active + 1 : 0;
  reloadSlider();
}
prev.onclick = function () {
  active = active - 1 >= 0 ? active - 1 : lengthItems;
  reloadSlider();
}
let refreshInterval = setInterval(() => { next.click() }, 3000);
function reloadSlider() {
  slider.style.left = -items[active].offsetLeft + 'px';
  // 
  let last_active_dot = document.querySelector('.slider .dots li.active');
  last_active_dot.classList.remove('active');
  dots[active].classList.add('active');

  clearInterval(refreshInterval);
  refreshInterval = setInterval(() => { next.click() }, 3000);


}

dots.forEach((li, key) => {
  li.addEventListener('click', () => {
    active = key;
    reloadSlider();
  })
})
window.onresize = function (event) {
  reloadSlider();
};
// ==== Swiper Slider =====
var swiper = new Swiper(".slide-container", {
  slidesPerView: 3,
  spaceBetween: 30,
  slidesPerGroup: 3,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
// ===== Photo Student Activity
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}

// ===== End Of Photo Student Activity