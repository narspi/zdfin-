import Swiper from "swiper";
import SimpleBar from "simplebar";
import { Scrollbar, Mousewheel } from "swiper/modules";

document.addEventListener("DOMContentLoaded", function () {
  const headerBurger = document.querySelector(".header__burger");
  const nav = document.querySelector(".nav");
  const headerInner = document.querySelector(".header__inner");
  const improvementsSlider = document.querySelector(".improvements__slider");
  const casesSlider = document.querySelector(".cases__slider");
  const reviewsSlider = document.querySelector(".reviews__slider");
  const stagesSlider = document.querySelector(".stages__slider");

  const mediaQueryWidth450 = window.matchMedia("(max-width: 450px)");
  const mediaQueryWidth900 = window.matchMedia("(max-width: 900px)");

  if (headerBurger && nav && headerInner) {
    const headerMenu = document.createElement("div");
    headerMenu.classList.add("header__menu");
    headerMenu.innerHTML = `
    <div class="header__menu-top">
      <a href="#" class="header__logo">
        <img src="./img/logo.png" alt="Вернуться на главную">
      </a>
      <button class="header__menu-close" aria-label="Закрыть меню" aria-controls="main-menu"></button>
    </div>
    `;
    const cloneNav = nav.cloneNode(true);
    cloneNav.className = "nav-menu";
    headerMenu.append(cloneNav);
    headerInner.append(headerMenu);

    headerMenu.addEventListener("click", (event) => {
      const target = event.target;
      if (target.closest(".header__menu-close")) {
        headerMenu.classList.remove("active");
      }
    });

    headerBurger.addEventListener("click", () => {
      headerMenu.classList.add("active");
    });
  }

  let improvementsBar;

  const handleWheel = (event) => {
    if (event.deltaY !== 0) {
      event.preventDefault();
      improvementsBar.getScrollElement().scrollLeft += event.deltaY;
    }
  };

  const initSimpleBar = (matches) => {
    if (!matches && !improvementsBar) {
      improvementsBar = new SimpleBar(improvementsSlider, {});
      improvementsSlider.addEventListener("wheel", handleWheel);
    } else if (matches && improvementsBar) {
      improvementsBar.unMount();
      improvementsBar = null;
      improvementsSlider.removeEventListener("wheel", handleWheel);
    }
  };

  if (improvementsSlider) {
    initSimpleBar(mediaQueryWidth450.matches);
    mediaQueryWidth450.addEventListener("change", (e) =>
      initSimpleBar(e.matches)
    );
  }

  let stagesBar;

  const initStagesBar = (matches) => {
    if (matches && !stagesBar) {
      stagesBar = new SimpleBar(stagesSlider, {});
    } else if (!matches && stagesBar) {
      stagesBar.unMount();
      stagesBar = null;
    }
  };

  if (stagesSlider) {
    initStagesBar(mediaQueryWidth900.matches);
    mediaQueryWidth900.addEventListener("change", (e) =>
      initStagesBar(e.matches)
    );
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