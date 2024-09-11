console.log('script part/posts-instagram')

const intervalDebounce1 = 300;
let debounceTimer1;

const debounce1 = (callback, time) => {
  window.clearTimeout(debounceTimer1);
  debounceTimer1 = window.setTimeout(callback, time);
};

function calulateThumbs1() {
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

function calculateSpaceBetween1() {
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
  slidesPerView: calulateThumbs1(),
  spaceBetween: calculateSpaceBetween1(),
  speed: 500,
});


const adaptiveSlider1 = (e) => {
  const widtWin = window.innerWidth;
  swiperInstagram.params.slidesPerView = calulateThumbs1();
  swiperInstagram.params.spaceBetween = calculateSpaceBetween1();
  swiperInstagram.update();
};


window.addEventListener("resize", (e) => {
  debounce1(adaptiveSlider1, intervalDebounce1);
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