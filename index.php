<?php
include "header.php";
?>
<body>
    <div id="map"></div>
    <script>

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfinta_lc8A__cwgyfe-YUHefgdMeNgOI&callback=initMap"
        async defer></script>
  </body>
<?php
include "footer.php";
?>