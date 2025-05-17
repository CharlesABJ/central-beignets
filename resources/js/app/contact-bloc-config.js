document.addEventListener("DOMContentLoaded", function () {
  const contactBloc = document.querySelector(".Contact-bloc");
  if (contactBloc) {
    const togglesFormZone = contactBloc.querySelector(".toggles-form-zone");
    const togglesForm = togglesFormZone.querySelectorAll(".toggle-form-button");
    const forms = contactBloc.querySelectorAll(".form");

    // Lire l’URL
    const urlParams = new URLSearchParams(window.location.search); // Récupère les paramètres de l'URL (ce qui est après le "?")
    const formToActivate = urlParams.get("form"); // Récupère le paramètre form de l'URL juste après le "?"

    togglesForm.forEach((toggleForm) => {
      // On récupère la valeur de l'attribut data-form du bouton
      const dataToggleForm = toggleForm.dataset.form;

      toggleForm.addEventListener("click", () => {
        // Mise à jour de l'URL sans recharger la page
        const newUrl = new URL(window.location);
        newUrl.searchParams.set("form", dataToggleForm); // On ajoute le paramètre form à l'URL et on lui donne la valeur de l'attribut data-form du bouton
        window.history.replaceState({}, "", newUrl); // On remplace l'URL actuelle par la nouvelle URL

        // Gestion des classes actives
        togglesForm.forEach((toggle) => toggle.classList.remove("active"));
        toggleForm.classList.add("active");

        forms.forEach((form) => {
          form.classList.remove("active");
          if (form.dataset.form === dataToggleForm) {
            form.classList.add("active");
          }
        });
      });

      // S’il y a un paramètre dans l’URL, on active le bon bouton automatiquement
      if (formToActivate && formToActivate === dataToggleForm) {
        toggleForm.click();
      }
    });
  }
});
