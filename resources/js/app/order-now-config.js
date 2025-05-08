document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const orderNow = document.querySelector(".order-now");
  const choices = document.querySelector(".choices");

  orderNow.addEventListener("click", (e) => {
    e.stopPropagation(); // Pour empecher le clic sur le body de fermer le menu
    choices.classList.toggle("active");
  });

  body.addEventListener("click", (e) => {
    if (!choices.contains(e.target)) {
      // On verifie que le clic n'est pas sur le menu
      choices.classList.remove("active");
    }
  });
});
