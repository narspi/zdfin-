import Swiper from "swiper";
import SimpleBar from "simplebar";
import { Scrollbar, Mousewheel } from "swiper/modules";

document.addEventListener("DOMContentLoaded", function () {
  const improvementsSlider = document.querySelector(".improvements__slider");
  const casesSlider = document.querySelector(".cases__slider");
  const reviewsSlider = document.querySelector(".reviews__slider");

  if (improvementsSlider) {
    const improvementsBar = new SimpleBar(improvementsSlider, {});

    improvementsSlider.addEventListener("wheel", function (event) {
      if (event.deltaY !== 0) {
        event.preventDefault();
        improvementsBar.getScrollElement().scrollLeft += event.deltaY;
      }
    });
  }

  if (casesSlider) {
    new Swiper(casesSlider, {
      modules: [Scrollbar, Mousewheel],
      slidesPerView: 1,
      spaceBetween: 57,
      loop: false,
      grabCursor: true,
      mousewheel: true,
      scrollbar: {
        el: ".cases__scrollbar",
        draggable: true,
        dragClass: "cases__scrollbar-drag",
      },
    });
  }

  if (reviewsSlider) {
    const reviewsBar = new SimpleBar(reviewsSlider, {});

    reviewsSlider.addEventListener("wheel", function (event) {
      if (event.deltaY !== 0) {
        event.preventDefault();
        reviewsBar.getScrollElement().scrollLeft += event.deltaY;
      }
    });
  }
});
