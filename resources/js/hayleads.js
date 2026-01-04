// resources/js/hayleads.js

function isMobile() {
  return window.innerWidth < 768;
}

document.addEventListener("DOMContentLoaded", () => {
  /**
   * =========================================
   * 1) "Ver más" de viñetas (mobile)
   * =========================================
   * En tu HTML usas: onclick="toggleItem(this)"
   * Entonces debe vivir en window.
   */
  window.toggleItem = function (element) {
    if (!isMobile()) return;

    const content = element?.querySelector(".mobile-content");
    if (content) content.classList.toggle("hidden");
  };

  /**
   * =========================================
   * 2) Sistema 3 pasos (mobile)
   * =========================================
   * En tu HTML usas: onclick="showStep(1)"
   */
  window.showStep = function (step) {
    if (!isMobile()) return;

    document.querySelectorAll(".step").forEach((el) => el.classList.add("hidden"));
    document.querySelectorAll(".step-btn").forEach((btn) => btn.classList.remove("active"));

    document.querySelector(`.step[data-step="${step}"]`)?.classList.remove("hidden");
    document.querySelectorAll(".step-btn")[step - 1]?.classList.add("active");
  };

  // Default: mostrar paso 1 en mobile
  if (isMobile()) {
    window.showStep(1);
  } else {
    // En desktop: mostrar todos (tu HTML ya tiene md:flex, pero esto lo refuerza)
    document.querySelectorAll(".step").forEach((el) => el.classList.remove("hidden"));
  }

  /**
   * =========================================
   * 3) Carrusel (mobile)
   * =========================================
   * En tu HTML usas: onclick="prevSlide()" / onclick="nextSlide()"
   */
  const track = document.getElementById("carouselTrack");
  let index = 0;
  let timerId = null;

  function slidesCount() {
    return track ? track.children.length : 0;
  }

  window.updateCarousel = function () {
    if (!track) return;

    if (!isMobile()) {
      track.style.transform = "translateX(0)";
      return;
    }
    track.style.transform = `translateX(-${index * 100}%)`;
  };

  window.nextSlide = function () {
    if (!track) return;
    const total = slidesCount();
    if (!total) return;

    index = (index + 1) % total;
    window.updateCarousel();
  };

  window.prevSlide = function () {
    if (!track) return;
    const total = slidesCount();
    if (!total) return;

    index = (index - 1 + total) % total;
    window.updateCarousel();
  };

  function startAutoSlide() {
    stopAutoSlide();
    if (!track) return;

    // Solo auto-slide en mobile
    if (!isMobile()) return;

    timerId = window.setInterval(() => {
      window.nextSlide();
    }, 5000);
  }

  function stopAutoSlide() {
    if (timerId) {
      clearInterval(timerId);
      timerId = null;
    }
  }

  // Inicializa carrusel
  window.updateCarousel();
  startAutoSlide();

  window.addEventListener("resize", () => {
    // Si cambia de tamaño, ajusta y reinicia el timer según sea mobile/desktop
    window.updateCarousel();
    startAutoSlide();

    // También re-render del sistema 3 pasos
    if (isMobile()) window.showStep(1);
    else document.querySelectorAll(".step").forEach((el) => el.classList.remove("hidden"));
  });

  /**
   * =========================================
   * 4) Ocultar banner "agenda_demo" cuando se ve el contacto
   * =========================================
   */
  const banner = document.getElementById("agenda_demo");
  const contacto = document.getElementById("contacto");

  if (banner && contacto && "IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      ([entry]) => {
        if (entry.isIntersecting) {
          banner.classList.add("opacity-0", "pointer-events-none");
        } else {
          banner.classList.remove("opacity-0", "pointer-events-none");
        }
      },
      { threshold: 0.2 }
    );

    observer.observe(contacto);
  }
});
