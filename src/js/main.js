import Swiper from '../../node_modules/swiper/swiper-bundle.min.mjs';
import bla from "./bla.js";


document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper", {
      slidesPerView: 3.8, 
      spaceBetween: 18,
      loop: false,
      grabCursor: true,
      mousewheel: true,
      touchReleaseOnEdges: true,
      scrollbar: {
        el: ".improvements__slider-scrollbar",
        draggable: true,
        dragClass: "improvements__slider-drag"
      },
    });
  });