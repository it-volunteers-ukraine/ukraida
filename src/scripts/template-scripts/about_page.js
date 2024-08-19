document.addEventListener('DOMContentLoaded', function () {
  const elements = document.querySelectorAll('.swiper-pagination-bullet');
  console.log(elements)

  elements.forEach(element => {
    element.style.setProperty('left', '0px', 'important');
    console.log(element.style);
  });
});

const swiper = new Swiper(".swiper", {
  // Параметры
  direction: "horizontal",
  loop: true,
  slidesPerView: 1, // По умолчанию 1 слайд
  spaceBetween: 24, // Расстояние между слайдами
  speed: 500,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },

  breakpoints: {
    // Когда ширина экрана >= 1200px
    1200: {
      slidesPerView: 2, // Показывать 2 слайда
      spaceBetween: 5, // Расстояние между слайдами
    },
  },
});

