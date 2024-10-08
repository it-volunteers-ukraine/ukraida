function setEqualHeight() {
  let maxHeight = 0;
  const slides = document.querySelectorAll('.swiper-slide');

  slides.forEach((slide) => {
    slide.style.height = 'auto'; // Обнуляємо висоту
  });

  // Знаходимо максимальну висоту слайду
  slides.forEach((slide) => {
    let slideHeight = slide.offsetHeight;
    if (slideHeight > maxHeight) {
      maxHeight = slideHeight;
    }
  });

  // Встановлюємо однакову висоту для всіх слайдів
  slides.forEach((slide) => {
    slide.style.height = maxHeight + 'px';
  });
}

// function setCustomPagination() {
//   const bullets = document.querySelectorAll('.swiper-pagination-bullet');
//   const activeIndex = swiper.realIndex; // Використовуємо realIndex для відслідковування активного слайду
//   const totalSlides = swiper.slides.length;

//   // ВИдаляємо всі буллети
//   bullets.forEach(bullet => bullet.style.display = 'none');

//   // Відображуємо тільки три буллета
//   for (let i = activeIndex - 1; i <= activeIndex + 1; i++) {
//     if (i >= 0 && i < totalSlides) {
//       bullets[i].style.display = 'inline-block';
//     }
//   }
// }

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
        // setCustomPagination(); // Налаштовуємо пагінацію вісля ініціалізації
      }, 0);
    },
    resize: function () {
      setEqualHeight();
      // setCustomPagination(); // Оновлюємо при зміні розміру
    },
    slideChangeTransitionEnd: function () {
      setEqualHeight();
      // setCustomPagination(); // Оновлюємо при зміні слайду
    }
  }
});




