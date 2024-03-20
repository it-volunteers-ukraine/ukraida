console.log('!!!start header.js');
const mobileMenu = document.querySelector(".js-menu-container");
const openMenuBtn = document.querySelector(".js-open-menu");
const overlayMenu = document.querySelector(".menu__overlay");
const closeMenuBtn = document.querySelector(".js-close-menu");

console.log(openMenuBtn)

const toggleMenu = () => {
  mobileMenu.classList.toggle("is__open");
  overlayMenu.classList.toggle("backdrop");
  document.body.classList.toggle("modal-open");
};

window.matchMedia("(min-width: 768px)").addEventListener("change", (e) => {
  if (!e.matches) return;
  mobileMenu.classList.remove("is__open");
  overlayMenu.classList.remove("backdrop");
  document.body.classList.remove("modal-open");
});

openMenuBtn.addEventListener("click", toggleMenu);
closeMenuBtn.addEventListener("click", toggleMenu);
