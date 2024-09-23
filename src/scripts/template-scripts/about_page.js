function setEqualHeight() {
  let maxHeight = 0;
  const slides = document.querySelectorAll('.swiper-slide');

  slides.forEach((slide) => {
    slide.style.height = 'auto'; // Обнуляємо висоту перед розрахунком
  });

  // Знаходимо максимальну висоту слайду
  slides.forEach((slide) => {
    let slideHeight = slide.offsetHeight;
    if (slideHeight > maxHeight) {
      maxHeight = slideHeight;
    }
  });

  // Встановлюємо однакоу висоту для всіх слайдів
  slides.forEach((slide) => {
    slide.style.height = maxHeight + 'px';
  });
}

const swiper = new Swiper(".swiper", {
  direction: "horizontal",
  loop: true,
  slidesPerView: 1,
  spaceBetween: 24,
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
    1200: {
      slidesPerView: 2,
    },
  },

  on: {
    init: function () {
      setTimeout(() => {
        setEqualHeight(); 
      }, 0); 
    },
    resize: function () {
      setEqualHeight(); 
    },
    slideChangeTransitionEnd: function () {
      setEqualHeight(); 
    }
  }
});



