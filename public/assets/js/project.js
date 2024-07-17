var swiper = new Swiper(".mySwiper", {
      spaceBetween: 5,
      slidesPerView: 10,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 5,
      slidesPerView: 2,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });


var swiper = new Swiper(".mySwiper-section", {
      pagination: {
        el: ".swiper-pagination",
      },
    });