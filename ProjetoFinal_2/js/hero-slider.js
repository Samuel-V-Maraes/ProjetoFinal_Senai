
document.addEventListener("DOMContentLoaded", () => {
  const INTERVAL_MS = 5000; // tempo entre as trocas de imagem

  const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)"
  ).matches;

  document.querySelectorAll(".hero").forEach((hero) => {
    const slides = hero.querySelectorAll(".hero-slide");
    if (slides.length < 2) return; // nada para alternar
    if (prefersReducedMotion) return; // respeita quem prefere menos animação

    let current = [...slides].findIndex((slide) =>
      slide.classList.contains("is-active")
    );
    if (current === -1) current = 0;

    setInterval(() => {
      slides[current].classList.remove("is-active");
      current = (current + 1) % slides.length;
      slides[current].classList.add("is-active");
    }, INTERVAL_MS);
  });
});
