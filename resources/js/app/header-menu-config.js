document.addEventListener("DOMContentLoaded", () => {
  const toggleButton1 = document.querySelector("header .toggle.is-menu-hidden");
  const toggleButton2 = document.querySelector(
    "header .toggle.is-menu-visible"
  );
  const html = document.querySelector("html");
  const menu = document.querySelector("header .menu-container");
  const logo = document.querySelector("header .logo");

  toggleButton1.addEventListener("click", () => {
    menu.classList.add("menu-visible");
    html.classList.add("menu-visible");
    logo.style.color = "var(--menu-color)";
  });
  toggleButton2.addEventListener("click", () => {
    menu.classList.remove("menu-visible");
    html.classList.remove("menu-visible");
    logo.style.color = "var(--black)";
  });
});
