function initMap() {
          var mapOptions = {
            center: { lat: 32.803217, lng: -16.996066 }, // Coordenadas del centro del mapa
            zoom: 12, // Nivel de zoom inicial
 };
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}

window.addEventListener('load', function() {
  const windowWidth = window.innerWidth;
  const map = document.getElementById('map')

  if (windowWidth >= 1000) {
    map.style.maxWidth = "1125px";
    map.style.width= "1000px"
    map.style.height="700px"
  } else{
    map.style.width= "100%"
  }
});
 
window.addEventListener('resize', function() {
  const windowWidth = window.innerWidth;
  const map = document.getElementById('map')

  if (windowWidth >= 1000) {
    map.style.maxWidth = "1125px";
    map.style.width= "1000px"
    map.style.height="700px"
  } else{
    map.style.width= "100%"
  }
});