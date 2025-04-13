document.addEventListener("DOMContentLoaded", function () {
  const themeColors = [
    "green",
    "yellow",
    "orange",
    "blue",
    "stone",
    "sand",
    "plum",
  ];
  const body = document.querySelector("body");
  const bodyThemeAttribute = body.getAttribute("data-main-color");
  let themeValue = themeColors.indexOf(bodyThemeAttribute) || 0;

  const headerLogo = document.querySelector("header .logo");

  headerLogo.addEventListener("click", function () {
    setTimeout(() => {
      headerLogo.style.pointerEvents = "none";
      setTimeout(() => {
        headerLogo.style.pointerEvents = "auto";
      }, 3000);
    }, 300);
    if (headerLogo.classList.contains("was-left")) {
      headerLogo.classList.remove("was-left");
      headerLogo.classList.add("was-right");
    } else {
      headerLogo.classList.add("was-left");
      headerLogo.classList.remove("was-right");
    }
    themeValue = (themeValue + 1) % themeColors.length;
    body.setAttribute("data-main-color", themeColors[themeValue]);
  });
});
