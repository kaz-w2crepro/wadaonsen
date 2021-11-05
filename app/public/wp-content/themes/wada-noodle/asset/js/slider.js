var slider = new Swiper ('.slider', {
  freeMode: true,
  loop: true,
  slidesPerView: 1,
  breakpoints: {
    768: {
      slidesPerView:1.5,
      centeredSlides : true,
      spaceBetween:40,
    },
    1024: {
      slidesPerView:2,
      centeredSlides : true,
      spaceBetween:100,
    }
  },
  speed: 3000,
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  }
});

var sliderNews = new Swiper ('.sliderNews', {
  freeMode: true,
  loop: true,
  slidesPerView: 1,
  breakpoints: {
    768: {
      slidesPerView:1.5,
      centeredSlides : true,
    },
    1024: {
      slidesPerView:2.4,
    }
  },
  speed: 3000,
  autoplay: {
    delay: 5000,
  },
  spaceBetween:40,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  }
});