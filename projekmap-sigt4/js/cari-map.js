var map;

function initialize() {
  var mapOptions = {
    zoom: 15,
    center: new google.maps.LatLng(lat, lng)
  }
  map = new google.maps.Map(
    document.getElementById('googleMap'), mapOptions
  );
  
  setMarkers(map, beaches);
}

var beaches = [ [nama, lat, lng] ];

function setMarkers(map, locations) {
  var shape = {
    coords: [1, 1, 1, 20, 18, 20, 18 , 1],
    type: 'poly'
  };
  var infoWindow = new google.maps.InfoWindow;
  for (var i = 0; i < locations.length; i++) {
    var beach = locations[i];
    var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: beach[4],
      shape: shape,
      title: beach[0],
      zIndex: beach[3]
    });
    var html = 'Lokasi : '+beach[0]+'<br/>Latitude : '+beach[1]+'<br/>Longitude : '+beach[2]+'';
    bindInfoWindow(marker, map, infoWindow, html);
  }
}

function bindInfoWindow(marker, map, infoWindow, html) {
  google.maps.event.addListener(marker, 'click', function() {
    infoWindow.setContent(html);
    infoWindow.open(map, marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

var view_map = document.querySelectorAll("tbody td > a.view_map");
view_map.forEach(element => {
  element.addEventListener('click', () => {
   let{lat,lng}= element.dataset;
    map.setPosition({
      lat: parseFloat(lat),
      lng: parseFloat(lng) });
  });
})