import Swiper from "swiper";
import SimpleBar from "simplebar";
import { Scrollbar, Mousewheel } from "swiper/modules";

document.addEventListener("DOMContentLoaded", function () {
  const improvementsSlider = document.querySelector(".improvements__slider");
  const casesSlider = document.querySelector(".cases__slider");

  if (improvementsSlider) {
    const simpleBar = new SimpleBar(improvementsSlider, {
      autoHide: false,
      classNames: {
        content: "improvements__scroll-content",
        scrollContent: "improvements__scroll-scroll-content",
        scrollbar: "improvements__scroll-scrollbar",
        track: "improvements__scroll-track",
      },
    });

    improvementsSlider.addEventListener("wheel", function (event) {
      if (event.deltaY !== 0) {
        event.preventDefault();
        simpleBar.getScrollElement().scrollLeft += event.deltaY;
      }
    });
  }

  console.log(casesSlider);

  if (casesSlider) {
    new Swiper(casesSlider, {
      modules: [Scrollbar, Mousewheel],
      slidesPerView: 1,
      spaceBetween: 57,
      loop: false,
      grabCursor: true,
      mousewheel: {
        releaseOnEdges: true,
      },
      scrollbar: {
        el: ".cases__scrollbar",
        draggable: true,
        dragClass: "cases__scrollbar-drag",
      },
    });
  }
});
