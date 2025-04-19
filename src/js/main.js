import Swiper from "swiper";
import SimpleBar from "simplebar";
import { Scrollbar, Mousewheel } from "swiper/modules";

document.addEventListener("DOMContentLoaded", function () {
  const headerBurger = document.querySelector(".header__burger");
  const nav = document.querySelector(".nav");
  const zdModal = document.querySelector("#zdin-modal");
  const zdModalContainer = document.querySelector(".zdin-modal__container");
  const improvementsSlider = document.querySelector(".improvements__slider");
  const casesSlider = document.querySelector(".cases__slider");
  const reviewsSlider = document.querySelector(".reviews__slider");
  const stagesSlider = document.querySelector(".stages__slider");

  const mediaQueryWidth450 = window.matchMedia("(max-width: 450px)");
  const mediaQueryWidth900 = window.matchMedia("(max-width: 900px)");

  if (headerBurger && nav) {
    const headerMenu = document.createElement("div");
    headerMenu.classList.add("header__menu");
    headerMenu.innerHTML = `
    <div class="header__menu-top">
      <a href="#" class="header__logo">
        <img src="/wp-content/themes/zdfin-theme/assets/img/logo.png" alt="Вернуться на главную">
      </a>
      <button class="header__menu-close" aria-label="Закрыть меню" aria-controls="main-menu"></button>
    </div>
    `;
    const cloneNav = nav.cloneNode(true);
    cloneNav.className = "nav-menu";
    headerMenu.append(cloneNav);
    zdModalContainer.append(headerMenu);

    zdModal.addEventListener("click", (event) => {
      const target = event.target;
      if (target.closest(".header__menu-close")) {
        zdModal.classList.remove("active");
        document.body.style = null;
      }
    });

    headerBurger.addEventListener("click", () => {
      zdModal.classList.add("active");
      document.body.style = "overflow: hidden;";
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
      autoHeight: true,
      mousewheel: {
        releaseOnEdges: true
      },
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

  document.querySelectorAll("[data-modal]").forEach((button) => {
    button.addEventListener("click", () => {
      const modalId = button.dataset.modal;
      if (modalId) {
        const modal = document.getElementById(modalId);
        if (modal) modal.style.display = "flex";
        document.body.style = "overflow: hidden;";
      }
    });
  });

  document.querySelectorAll(".form-modal__close").forEach((button) => {
    button.addEventListener("click", () => {
      modal = button.closest(".form-modal");
      modal.style.display = null;
      document.body.style = null;
    });
  });

  document.querySelectorAll(".form-modal__iframe").forEach((iframe) => {
    iframe.addEventListener("load", () => {
      const loader = iframe
        .closest(".form-modal")
        .querySelector(".form-modal__loader");
      if (loader) loader.style.display = "none";
    });
  });

  document.querySelectorAll("[data-improvements]").forEach((button) => {
    button.addEventListener("click", () => {
      const modalId = button.dataset.improvements;
      const modal = document.getElementById(modalId);
      if (modal) {
        modal.style.display = "flex";

        const scrollBarWidth =
          window.innerWidth - document.documentElement.clientWidth;

        document.body.style.overflow = "hidden";
        document.body.style.paddingRight = scrollBarWidth + "px";
      }
    });
  });

  document.querySelectorAll(".improvements-modal__close").forEach((button) => {
    button.addEventListener("click", () => {
      modal = button.closest(".improvements-modal");
      modal.style.display = null;
      document.body.style = null;
    });
  });

  const forms = document.querySelectorAll("[data-bitrix-form]");

  const svgHtmlLoading = `
  <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 16 16" fill="none" class="form-modal__btn-loading">
    <g fill="#000000" fill-rule="evenodd" clip-rule="evenodd">
      <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2" fill="#fff"/>
      <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z" fill="#2b660b" />
    </g>
  </svg>
  `;

  const svgHtmlSuccess = `
  <svg
    xmlns="http://www.w3.org/2000/svg"
    fill="#000000"
    width="22px"
    height="22px"
    viewBox="-3.5 0 19 19"
    class="orm-modal__btn-success"
  >
    <path
      d="M4.63 15.638a1.028 1.028 0 0 1-.79-.37L.36 11.09a1.03 1.03 0 1 1 1.58-1.316l2.535 3.043L9.958 3.32a1.029 1.029 0 0 1 1.783 1.03L5.52 15.122a1.03 1.03 0 0 1-.803.511.89.89 0 0 1-.088.004z" fill="#fff"
    />
  </svg>
  `;

  forms.forEach((form) => {
    const ajaxUrl = form.dataset.ajaxUrl;
    const submitButton = form.querySelector(".form-modal__btn");
    const messageElem = form.querySelector(".form-modal__message");

    form.addEventListener("submit", function (e) {
      e.preventDefault();
      submitButton.disabled = true;

      const formData = new FormData(form);
      formData.append("action", "send_form");

      submitButton.innerHTML = svgHtmlLoading;

      fetch(ajaxUrl, {
        method: 'POST',
        body: formData
      })
        .then((response) => response.json())
        .then((json) => {
          console.log(json);
          if (json.success) {
            messageElem.textContent = "Успешно отправлено";
            submitButton.innerHTML = svgHtmlSuccess;
            form.reset();
            setTimeout(()=>{
              messageElem.textContent = "";
              submitButton.innerHTML = "Отправить";
            },3000)
          } else {
            console.log("Ошибка: " + json.data.message);
            messageElem.textContent = json.data.message;
            submitButton.innerHTML = 'Отправить';
          }
        })
        .catch((error) => {
          submitButton.innerHTML = 'Отправить';
          console.error(error);
          messageElem.textContent = "Упс что то пошло не так";
        })
        .finally(() => {
          submitButton.disabled = false;
        });
    });
  });
});
