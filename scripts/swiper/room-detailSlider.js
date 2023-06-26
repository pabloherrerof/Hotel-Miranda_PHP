



const relatedRoomsPrev= document.querySelector('.related-rooms__button-prev');
const relatedRoomsNext = document.querySelector('.related-rooms__button-next');



  


   const swiperRelatedRooms = new Swiper('.swiper__related-rooms', {
    direction: "horizontal",
    loop: true,
    slidesPerView: 1,
    
    navigation: {
     nextEl: relatedRoomsNext,
     prevEl: relatedRoomsPrev, 
   },
 
    
   });