const swiperCoreFeaturesDark = new Swiper('.swiper__core-features--dark', {
  direction: "horizontal",
 
 
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

   const swiperFunFacts = new Swiper('.swiper__fun-facts__slider', {
    direction: "horizontal",
    loop: true,

 
    pagination: {
      el: '.swiper-pagination--fun-facts',
      clickable: true,
    },

    1000: {
      slidesPerView: 1
    },
    0:{
      slidesPerView:1
    },
 
    
   });