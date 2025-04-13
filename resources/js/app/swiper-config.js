document.addEventListener("DOMContentLoaded", function () {
  if (document.querySelector(".headerBannerSwiper")) {
    const headerBannerSwiper = new Swiper(".headerBannerSwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      allowTouchMove: false,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 5000,
      },
    });

    // On désactive l'autoplay lorsque le bouton est survolé ou si le menu est visible
    const ctaButtons = document.querySelectorAll(".swiper .button");
    const toggleIsMenuHidden = document.querySelector(".toggle.is-menu-hidden");

    const toggleIsMenuVisible = document.querySelector(
      ".toggle.is-menu-visible"
    );

    toggleIsMenuHidden.addEventListener("click", () => {
      headerBannerSwiper.autoplay.stop();
    });
    toggleIsMenuVisible.addEventListener("click", () => {
      headerBannerSwiper.autoplay.start();
    });

    ctaButtons.forEach((ctaButton) => {
      if (ctaButton) {
        ctaButton.addEventListener("mouseenter", () => {
          headerBannerSwiper.autoplay.stop();
        });

        ctaButton.addEventListener("mouseleave", () => {
          headerBannerSwiper.autoplay.start();
        });
      }
    });
  }
});
