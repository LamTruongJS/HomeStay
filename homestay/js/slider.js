if (window.outerWidth > 740) {
  var swiper = new Swiper('.mySwiper', {
    slidesPerView: 5,
    spaceBetween: 1,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
} else {
  
  var swiper = new Swiper('.mySwiper', {
    slidesPerView: 1.5,
    spaceBetween: 1,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
  });
}
