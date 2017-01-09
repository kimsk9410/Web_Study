<?php
include "header.php";
?>

<body>

<div id="style-selector-control"  class="map-control">
    <select id="style-selector" class="selector-control">
        <option value="default">Default</option>
        <option value="silver">Silver</option>
        <option value="night">Night mode</option>
        <option value="retro" selected="selected">Retro</option>
        <option value="hiding">Hide features</option>
    </select>
</div>

    <div id="map"></div>
    <script src="/js/map_style.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfinta_lc8A__cwgyfe-YUHefgdMeNgOI&callback=initMap"
        async defer></script>

</body>

<?php
include "footer.php";
?>