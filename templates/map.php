<!DOCTYPE html>
<html>

<body>

<div id="map" style="width:50%;height:300px"></div>

<script>
function myMap(latitude,longitude) {
  var myCenter = new google.maps.LatLng(35.8919895,128.60718680000002);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 6};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);

  // Zoom to 9 when clicking on marker
  google.maps.event.addListener(marker,'click',function() {
    map.setZoom(5);
    map.setCenter(marker.getPosition());
  });
}

function setMap() {
   var latitude = document.getElementById('latitude').value;
   var longitude = document.getElementById('longitude').value;
   myMap(latitude,longitude);

}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQM1k2mpuAAjPy9OglzU9reT00thxdGzA&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
