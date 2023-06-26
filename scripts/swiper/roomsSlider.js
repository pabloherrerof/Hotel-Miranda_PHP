const prevButton = document.querySelector('.room-slider__button-prev');
const nextButton = document.querySelector('.room-slider__button-next');

const roomSlider = new Swiper(".swiper__rooms", {
    direction: "horizontal",
    slidesPerView: 1,
    centeredSlide: true,
    navigation: {
        nextEl: nextButton,
        prevEl: prevButton,
      },
      pagination: {
        el: '.swiper-pagination--rooms',
        clickable: false,
      }
})

const paginationBullets = document.querySelectorAll('.swiper-pagination-bullet');
paginationBullets.forEach(bullet => {
    bullet.classList.add("swiper-bullets--rooms")

})

paginationBullets.forEach(function (bullet, index) {
    bullet.textContent = index + 1;
  });

  

  paginationBullets.forEach(function (bullet, index) {
    bullet.addEventListener('click', function () {
        roomSlider.slideTo(index);
    });
  });

  