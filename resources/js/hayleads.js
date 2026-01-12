function isMobile() {
  return window.matchMedia("(max-width: 767px)").matches;
}

document.addEventListener("DOMContentLoaded", () => {

  const bulletButtons = document.querySelectorAll(".bullet-title");
  const bulletContents = document.querySelectorAll(".bullet-content");

  bulletButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      if (window.innerWidth >= 768) return;

      const target = document.getElementById(btn.dataset.content);

      bulletContents.forEach(c => {
        c.classList.remove("show");
        setTimeout(() => c.classList.add("hidden"), 3000);
      });

      target.classList.remove("hidden");
      requestAnimationFrame(() => target.classList.add("show"));
    });
  });

  /* =========================
   * 2) Sistema 3 pasos
   * ========================= */
  window.showStep = function (step) {
    if (!isMobile()) return;

    document.querySelectorAll(".step").forEach(el => el.classList.add("hidden"));
    document.querySelectorAll(".step-btn").forEach(btn => btn.classList.remove("active"));

    document.querySelector(`.step[data-step="${step}"]`)?.classList.remove("hidden");
    document.querySelectorAll(".step-btn")[step - 1]?.classList.add("active");
  };

  if (isMobile()) {
    window.showStep(1);
  }

  /* =========================
   * 3) Carrusel mobile
   * ========================= */
  const track = document.getElementById("carouselTrack");
  let index = 0;
  let timer = null;

  function updateCarousel() {
    if (!track) return;

    if (!isMobile()) {
      track.style.transform = "translateX(0)";
      return;
    }
    track.style.transform = `translateX(-${index * 100}%)`;
  }

  window.nextSlide = function () {
    if (!track) return;
    index = (index + 1) % track.children.length;
    updateCarousel();
  };

  window.prevSlide = function () {
    if (!track) return;
    index = (index - 1 + track.children.length) % track.children.length;
    updateCarousel();
  };

  function startAuto() {
    if (!isMobile()) return;
    stopAuto();
    timer = setInterval(window.nextSlide, 5000);
  }

  function stopAuto() {
    if (timer) clearInterval(timer);
  }

  updateCarousel();
  startAuto();

  window.addEventListener("resize", () => {
    updateCarousel();
    startAuto();
  });

  /* =========================
   * 4) Ocultar banner agenda
   * ========================= */
  const banner = document.getElementById("agenda_demo");
  const contacto = document.getElementById("contacto");

  if (banner && contacto && "IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      ([entry]) => {
        banner.classList.toggle("opacity-0", entry.isIntersecting);
        banner.classList.toggle("pointer-events-none", entry.isIntersecting);
      },
      { threshold: 0.2 }
    );

    observer.observe(contacto);
  }
});
