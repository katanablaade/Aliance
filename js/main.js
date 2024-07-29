const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  // присвоили класс на белую шапку грубо говоря
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo";
};
const lightModeOff = (event) => {
  // присвоили класс на убирание белой шапки грубо говоря
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo-light";
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
  lightModeOff(); // дополнительно выключаем lightMode
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff(); // формулировка вопроса - если да, то 'действие 1', иначе 'действие 2'
});
mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});
