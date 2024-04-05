console.log("script part/projects-swiper");
const intervalDebounce = 300;
let debounceTimer;

const isDesktop = window.innerWidth > 767 ? 1 : 0;
// const initialSlideForSlider1 = 1 + isDesktop;

const debounce = (callback, time) => {
  window.clearTimeout(debounceTimer);
  debounceTimer = window.setTimeout(callback, time);
};
// var swiper = new Swiper(".mySwiper", {
//   pagination: {
//     el: ".swiper-pagination2",
//     dynamicBullets: true,
//   },
// });

function calulatethumbs() {
  const widtWin = window.innerWidth;
  countThumbs = 0;
  if (widtWin < 767) {
    countThumbs = 2.2;
  } else if (widtWin < 1199) {
    countThumbs = 2.72;
  } else {
    countThumbs = 3;
  }
  return countThumbs;
}

const swiperThumbs = new Swiper(".swiper-thumbs", {
  // Optional parameters
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
  direction: "horizontal",
  loop: true,
  slidesPerView: 4,
  spaceBetween: 24,
  speed: 500,
});

const swiperMain = new Swiper(".swiper-main", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  slidesPerView: 1,
  spaceBetween: 24,
  speed: 500,
  // If we need pagination
  // pagination: {
  //   el: ".swiper-pagination",
  //   dynamicBullets: true,
  // },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
  thumbs: {
    swiper: swiperThumbs,
  },
});

const adaptiveSlider = (e) => {
  const widtWin = window.innerWidth;
  // swiperThumbs.params.slidesPerView = calulatethumbs();

  if (widtWin < 767) {
    swiperThumbs.params.spaceBetween = 6;
  } else if (widtWin < 1199) {
    swiperThumbs.params.spaceBetween = 20;
  } else {
    console.log("else widthWin: " + widtWin);
    swiperThumbs.params.spaceBetween = 24;
  }

  swiperThumbs.update();
};

// adaptiveSlider();

window.addEventListener("resize", (e) => {
  debounce(adaptiveSlider, intervalDebounce);
});
