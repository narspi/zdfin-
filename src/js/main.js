import Swiper from '../../node_modules/swiper/swiper-bundle.min.mjs';


document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper", {
      slidesPerView: 'auto',
      spaceBetween: 18,
      loop: false,
      grabCursor: true,
      mousewheel: true,
      scrollbar: {
        el: ".swiper-scrollbar",
       
        draggable: true,
      },
  
    });

    new Swiper(".cases__slider", {
      slidesPerView: 1,
      spaceBetween: 57,
      loop: false,
      grabCursor: true,
      mousewheel: true,
      scrollbar: {
        el: ".cases__scrollbar",
        draggable: true,
        dragClass: "cases__scrollbar-drag"
      },
    });

  });