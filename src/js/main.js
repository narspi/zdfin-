import Swiper from '../../node_modules/swiper/swiper-bundle.min.mjs';
import bla from "./bla.js";


document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper", {
      slidesPerView: 'auto',
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

    new Swiper(".cases__slider", {
      slidesPerView: 1,
      spaceBetween: 57,
      loop: false,
      grabCursor: true,
      mousewheel: true,
      touchReleaseOnEdges: true,
      scrollbar: {
        el: ".cases__scrollbar",
        draggable: true,
        dragClass: "cases__scrollbar-drag"
      },
    });

  });