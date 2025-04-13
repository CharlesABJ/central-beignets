document.addEventListener("DOMContentLoaded", () => {
  const headerBannerHasBigBannerImage = document.querySelector(
    ".header-banner.has-big-header-banner-image"
  );
  const header = document.querySelector("body > header");

  function updateHeaderTransparency() {
    let scrollY = window.scrollY;

    if (scrollY < 100) {
      header.setAttribute("data-transparent", true);
      header.style.backgroundColor = `color-mix(in srgb, var(--white-light) ${scrollY}%, transparent)`;
    } else {
      header.setAttribute("data-transparent", false);
      header.style.backgroundColor = `var(--white-light)`;
    }
  }

  if (headerBannerHasBigBannerImage) {
    updateHeaderTransparency();

    window.addEventListener("scroll", updateHeaderTransparency);
  }
});
