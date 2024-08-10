const swipers = [];

// Creating swipers
for (i = 1; i < 3; i++) {
  swipers.push(new Swiper(`#swiper${i}`, {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    slidesPerView: 1,
    spaceBetween: 24,
    speed: 500,
  
    navigation: {
      nextEl: `#swiper${i}NextButton`,
      prevEl: `#swiper${i}PrevButton`,
    },
  
    pagination: {
      el: `#swiper${i}Pagination`,
      dynamicBullets: true,
    },
  }));
}
