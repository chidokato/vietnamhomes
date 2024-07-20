var swiper = new Swiper(".mySwiper", {
      spaceBetween: 2,
      slidesPerView: 10,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 2,
      slidesPerView: 2,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });


var swiper = new Swiper(".mySwiper-section-1", {
  spaceBetween: 2,
  slidesPerView: 1,
  pagination: {
    el: ".swiper-pagination",
  },
});

var swiper = new Swiper(".mySwiper-section-2", {
  spaceBetween: 2,
  slidesPerView: 2,
  pagination: {
    el: ".swiper-pagination",
  },
});

var swiper = new Swiper(".menu-tab", {
  spaceBetween: 0,
  slidesPerView: 7,
  pagination: {
    el: ".swiper-pagination",
  },
});



function openTab(evt, tabName) {
    var i, tabcontent, tablinks;

    // Hide all tab contents
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the active class from all tab links
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
