const swipers = [];

function initSwipers() {
  swipers.length = 0;
  // Creating swipers
  jQuery('.swiper[id^="swiper"]').each((index, el) => {
    const id = el.id;
    swipers.push(new Swiper(`#${id}`, {
      // Optional parameters
      direction: "horizontal",
      loop: true,
      slidesPerView: 1,
      spaceBetween: 24,
      speed: 500,
    
      navigation: {
        nextEl: `#${id}NextButton`,
        prevEl: `#${id}PrevButton`,
      },
    
      pagination: {
        el: `#${id}Pagination`,
        dynamicBullets: true,
      },
    }));
  });
}

initSwipers();