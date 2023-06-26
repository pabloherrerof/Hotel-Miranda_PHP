
const popularRoomsPrev = document.querySelector('.popular-rooms__button-prev');
const popularRoomsNext = document.querySelector('.popular-rooms__button-next');

const swiperPopularRooms = new Swiper('.swiper__popular-rooms', {
    direction: "horizontal",
    loop: true,
    slidesPerView: 1,
    
    navigation: {
     nextEl: popularRoomsNext,
     prevEl: popularRoomsPrev, 
   },
 
   breakpoints: {
    1000: {
      slidesPerView: 3,
    },
    0:{
      slidesPerView:1
    },
  }
    
   });