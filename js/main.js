const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  // присвоили класс на белую шапку грубо говоря
  navbar.classList.add("navbar-light");
  logo.style.display = "block";
  logoLight.style.display = "none";
  mMenuToggle.classList.add("mobile-menu-toggle-light");
};
const lightModeOff = (event) => {
  // присвоили класс на убирание белой шапки грубо говоря
  navbar.classList.remove("navbar-light");
  logo.style.display = "none";
  logoLight.style.display = "block";
  mMenuToggle.classList.remove("mobile-menu-toggle-light");
};
const openMenu = (event) => {
  // функция открывания меню
  menu.classList.add("is-open"); // вешает класс is-open
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; // запрещаем прокрутку сайта под меню
  lightModeOn(); // дополнительно включаем lightMode
};
const closeMenu = (event) => {
  // функция закрывания меню
  menu.classList.remove("is-open"); // убирает класс is-open
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; // возвращает прокрутку сайта под меню
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff(); // формулировка вопроса - если да, то 'действие 1', иначе 'действие 2'
});
mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".features-slider", {
  speed: 400,
  slidesPerView: 1,
  loop: true,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 480px
    769: {
      slidesPerView: 3,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1000: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1201: {
      slidesPerView: 5,
    },
  },
});
const stepsSteps = new Swiper(".steps-slider", {
  speed: 400,
  wrapperClass: "swiper-wrapper-steps",
  slidesPerView: 1,
  loop: true,
  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
    },
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    769: {
      slidesPerView: 3,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 4,
    },
  },
});

const stepsBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 2,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 2,
    },
  },
});

const modal = document.querySelector(".modal");
const modalToggle = document.querySelectorAll("[data-toggle=modal]");
const modalClose = document.querySelector(".modal-close");
const modalDialog = document.querySelector(".modal-dialog");

modalToggle.forEach((element) => {
  element.addEventListener("click", (event) => {
    event.preventDefault();
    modal.classList.add("is-open");
    document.body.style.overflow = "hidden";
  });
});
modalClose.addEventListener("click", (event) => {
  event.preventDefault();
  modal.classList.remove("is-open");
  document.body.style.overflow = "";
});

document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    modal.classList.remove("is-open");
    document.body.style.overflow = "";
  }
});
modal.addEventListener("mousedown", (e) => {
  const elementClick = e.composedPath().includes(modalDialog);
  if (!elementClick) {
    modal.classList.remove("is-open");
    document.body.style.overflow = "";
  }
});
