<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 14.6091, lng: 121.0223},
          zoom: 13
        });
		if (typeof navigator !== 'undefined' && typeof navigator.geolocation !== 'undefined' ) {
			 navigator.geolocation.getCurrentPosition(function (position) {
				 initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
				 map.setCenter(initialLocation);
			 });
		 }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkBB9mkoz-AuZJ2yhN17R00DHpMQYkog&callback=initMap"
    async defer></script>
  </body>
</html>
