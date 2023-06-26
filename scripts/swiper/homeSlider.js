const prevButton = document.querySelector('.room-card__button-prev');
const nextButton = document.querySelector('.room-card__button-next');

const menuPrevButton = document.querySelector('.menu__button-prev');
const menuNextButton = document.querySelector('.menu__button-next');

const swiper = new Swiper('.swiper--handpicked-rooms', {
    direction: "horizontal",
    loop: true,
    slidesPerView: 1,
    centeredSlide: true,
    spaceBetween: 10,
 
    navigation: {
     nextEl: nextButton,
     prevEl: prevButton, 
   },
 
    
   });
 
 
   const swiperCoreFeatures = new Swiper('.swiper--core-features', {
     direction: "horizontal",
    
     pagination: {
      el: '.swiper-pagination--core-features',
      clickable: true,
    },
 
     breakpoints: {
       1000: {
         slidesPerView: 3,
         slidesPerColumn: 3,
         grid:{
           rows: 2,
           fill: 'row'
         }
       },
       0:{
         slidesPerView:1
       },
     }
    });
 
    function updateSwiperCoreFeatures() {
     console.log(swiperCoreFeatures)
     swiperCoreFeatures.update();
     swiperCoreFeatures.updateSlides();
     swiperCoreFeatures.updateProgress();
     swiperCoreFeatures.updateSlidesClasses();
     swiperCoreFeatures.lazy && swiperCoreFeatures.lazy.load();
   }
   window.addEventListener('resize', updateSwiperCoreFeatures);
    
   
    const swiperMenu = new Swiper('.swiper--menu', {
     direction: "horizontal",
     loop: true,
  
     navigation: {
      nextEl: menuNextButton,
      prevEl: menuPrevButton, 
    },
 
   breakpoints: {
     1000: {
       slidesPerView: 2,
       spaceBetween: 50
     },
     0:{
       slidesPerView:1
     },
   }
  
     
    });
 
 
    function updateSwiperMenu() {
     swiperMenu.update(); 
   }
   window.addEventListener('resize', updateSwiperMenu);
  
    
    const swiperMenuPhoto = new Swiper('.swiper--menu__photo', {
     direction: "horizontal",
     loop: true,
     slidesPerView: 1,
  
     pagination: {
       el: '.swiper-pagination--menu__photo',
       clickable: true,
     },
     breakpoints: {
       1000: {
         slidesPerView: 3,
         spaceBetween: 20,
       },
       0:{
         slidesPerView:1
       },
     }
     
    });
    function updateSwiperMenuPhoto() {
     swiperMenuPhoto.update(); 
   }
   window.addEventListener('resize', updateSwiperMenuPhoto);