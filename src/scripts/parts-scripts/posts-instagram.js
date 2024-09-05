console.log('script part/posts-instagram')

const intervalDebounce = 300;
let debounceTimer;

const isDesktop = window.innerWidth > 767 ? 1 : 0;
// const initialSlideForSlider1 = 1 + isDesktop;

const debounce = (callback, time) => {
  window.clearTimeout(debounceTimer);
  debounceTimer = window.setTimeout(callback, time);
};

function calulateThumbs() {
  const widtWin = window.innerWidth;
  countThumbs = 0;
  if (widtWin < 767) {
    countThumbs = 1.1;
  } else if (widtWin < 1199) {
    countThumbs = 2;
  } else {
    countThumbs = 3;
  }
  return countThumbs;
}

function calculateSpaceBetween() {
  const widtWin = window.innerWidth;
  countSpaceBetween = 0;
  if (widtWin < 767) {
    countSpaceBetween = 16;
  } else if (widtWin < 1439) {
    countSpaceBetween = 20;
  } else {
    countSpaceBetween = 24;
  }
  return countSpaceBetween;
}

const swiperInstagram = new Swiper(".swiper-instagram", {
  // Optional parameters
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  direction: "horizontal",
  loop: true,
  slidesPerView: calulateThumbs(),
  spaceBetween: calculateSpaceBetween(),
  speed: 500,
});


const adaptiveSlider = (e) => {
  const widtWin = window.innerWidth;
  swiperInstagram.params.slidesPerView = calulateThumbs();
  swiperInstagram.params.spaceBetween = calculateSpaceBetween();
  swiperInstagram.update();
};

// adaptiveSlider();

window.addEventListener("resize", (e) => {
  debounce(adaptiveSlider, intervalDebounce);
});


document.addEventListener('load', function() {
    // Найти все элементы с классом "Content EmbedFrame"
    console.log("Start find elements");
    var elements = document.querySelectorAll('.Content.EmbedFrame');
    console.log(elements);
    // Пройтись по каждому элементу и изменить его стиль
    elements.forEach(function(element) {
        element.style.padding.bottom = '100%'; // Пример изменения стиля
        // element.style.border = '2px solid red'; // Пример изменения стиля
    });
});