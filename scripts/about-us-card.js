window.addEventListener('load', function() {
    const windowWidth = window.innerWidth;
    const iconsContainer = document.getElementsByClassName('introduction__icons')
    console.log(iconsContainer)
    
  
    if (windowWidth >= 1000) {
        const newImg = document.createElement('img');
        newImg.classList.add("introduction__icon");
        newImg.src ="../assets/about-us/BBQ.svg";
        newImg.id = "bbq-icon"
        iconsContainer[0].appendChild(newImg)
    } 
  });
   
  window.addEventListener('resize', function() {
    const windowWidth = window.innerWidth;
    const iconsContainer = document.getElementsByClassName('introduction__icons')
  
    if (windowWidth >= 1000 && !document.getElementById('bbq-icon') ) {
        const newImg = document.createElement('img');
        newImg.classList.add("introduction__icon");
        newImg.id = "bbq-icon"
        newImg.src ="../assets/about-us/BBQ.svg";
        iconsContainer[0].appendChild(newImg)
    } 
    if(windowWidth < 1000 && document.getElementById('bbq-icon')){
        iconsContainer[0].removeChild(document.getElementById('bbq-icon'))
    }
  });