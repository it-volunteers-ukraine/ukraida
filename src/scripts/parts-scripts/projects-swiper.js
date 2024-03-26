console.log("script part/projects-swiper");
const intervalDebounce = 300;
let debounceTimer;

const isDesktop = window.innerWidth > 767 ? 1 : 0;
// const initialSlideForSlider1 = 1 + isDesktop;

const debounce = (callback, time) => {
  window.clearTimeout(debounceTimer);
  debounceTimer = window.setTimeout(callback, time);
};

const swiperThumbs = new Swiper(".swiper-thumbs", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  slidesPerView: 2 + isDesktop,
  spaceBetween: 24,
});

const swiperMain = new Swiper(".swiper-main", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  slidesPerView: 1,
  spaceBetween: 24,
  // If we need pagination
  // pagination: {
  //   el: '.swiper-pagination',
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
  if (widtWin < 767) {
    swiperThumbs.params.slidesPerView = 2.2;
    spaceBetween = 6;
    swiperThumbs.update();
  } else if (widtWin < 1199) {
    swiperThumbs.params.slidesPerView = 2.6;
    spaceBetween = 20;
    swiperThumbs.update();
//   } else if (widtWin < 1439) {
    //   swiperThumbs.update();
    } else {
    swiperThumbs.params.slidesPerView = 3;
    spaceBetween = 24;
    swiperThumbs.update();
  }
};

// adaptiveSlider();

window.addEventListener("resize", (e) => {
  debounce(adaptiveSlider, intervalDebounce);
});
