const mobileMenu = document.querySelector(".js-menu-container");
const openMenuBtn = document.querySelector(".js-open-menu");
const overlayMenu = document.querySelector(".menu__overlay");
const closeMenuBtn = document.querySelector(".js-close-menu");

const toggleMenu = () => {
  mobileMenu.classList.toggle("is__open");
  overlayMenu.classList.toggle("backdrop");
};

window.matchMedia("(min-width: 768px)").addEventListener("change", (e) => {
  if (!e.matches) return;
  mobileMenu.classList.remove("is__open");
  overlayMenu.classList.remove("backdrop");
});

openMenuBtn.addEventListener("click", toggleMenu);
closeMenuBtn.addEventListener("click", toggleMenu);
