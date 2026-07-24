/*
 * Carrossel automático dos banners (hero) — Alta Forma.
 *
 * Funciona em qualquer página: procura todo elemento ".hero" que
 * contenha 2 ou mais ".hero-slide" dentro dele e alterna a classe
 * "is-active" entre eles em intervalos regulares. A transição de
 * opacidade (o efeito de fade) é feita pelo CSS, não por aqui.
 *
 * Se o hero tiver só 1 slide (ou nenhum), o script não faz nada —
 * a imagem de fundo fica estática, sem erro.
 */

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
