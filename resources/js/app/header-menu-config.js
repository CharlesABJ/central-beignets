document.addEventListener("DOMContentLoaded", () => {
  const menu = document.querySelector("header nav");
  const burgerMenu = document.querySelector(".burger-menu");
  const html = document.querySelector("html");

  burgerMenu.addEventListener("click", () => {
    menu.classList.toggle("is-active");
    burgerMenu.classList.toggle("is-active");
    html.classList.toggle("menu-visible");
  });
});
