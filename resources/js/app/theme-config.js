document.addEventListener("DOMContentLoaded", () => {
  const toggleTheme = document.querySelector(".toggle-theme");
  const body = document.querySelector("body");
  const hour = new Date().getHours();
  let localStorageTheme = localStorage.getItem("theme");

  if (hour < 6 || hour > 18) {
    body.setAttribute("data-theme", "dark");
  }

  toggleTheme.addEventListener("click", () => {
    let bodyThemeAttribute = body.getAttribute("data-theme");
    toggleTheme.classList.toggle("is-dark");

    if (bodyThemeAttribute === "light") {
      body.setAttribute("data-theme", "dark");
    }
    if (bodyThemeAttribute === "dark") {
      body.setAttribute("data-theme", "light");
    }
  });
});
