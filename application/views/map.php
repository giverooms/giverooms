
    <style>
      #map {
        height: 275px;
        border: 1px solid #e5e4e2;
      }
    </style>
    <script>
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 16.8014008, lng: 96.1326402},
    zoom: 16
  });

  var infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);

  service.getDetails({
    placeId: 'ChIJQayEmkDrwTARK1m90knlK9s'
  }, function(place, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
      var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
      });
    }
  });
}

    </script>
    <div id="map"></div>
    <script
src="https://maps.googleapis.com/maps/api/js?signed_in=true&libraries=places&callback=initMap" async defer></script>