const menuBtn = document.querySelector('#menuBtn')
const navDrop = document.querySelector('.nav')

menuBtn.addEventListener('click', function(){
    menuBtn.classList.toggle('fa-times')
    navDrop.classList.toggle('active')
})
window.addEventListener('scroll', function(){
    menuBtn.classList.remove('fa-times')
    navDrop.classList.remove('active')
})
window.addEventListener('click', function(){
    // menuBtn.classList.remove('fa-times')
    // navDrop.classList.remove('active')
})

// swiper Js 
var swiper = new Swiper(".home-slider", {
    spaceBetween: 20,
    effect: "fade",
    loop: true,
    navigation: {
      // nextEl: ".swiper-button-next",
      // prevEl: ".swiper-button-prev",
    },
    centeredSlides: true,
    autoplay: {
      delay: 8500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });