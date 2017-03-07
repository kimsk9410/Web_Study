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
<script>
    function initMap() {
        // Create the map with no initial style specified.
        // It therefore has default styling.
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 37.611878, lng: 127.047223},
            zoom: 8,
            mapTypeControl: false
        });

        // Add a style-selector control to the map.
        var styleControl = document.getElementById('style-selector-control');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(styleControl);

        // Set the map's style to the initial value of the selector.
        var styleSelector = document.getElementById('style-selector');
        map.setOptions({styles: styles[styleSelector.value]});

        // Apply new JSON when the user selects a different style.
        styleSelector.addEventListener('change', function() {
            map.setOptions({styles: styles[styleSelector.value]});
        });

        <?php
        /*$conn = mysql_connect("localhost", "skwinter", "skwinter0513") or die("실패입니다.");
        mysql_select_db("skwinter");*/
        $re = mysql_query("SELECT number,Title,Memo,Latitude,Longitude FROM Memo ORDER BY number");

        while ($result = mysql_fetch_array($re)){
            $title = $result[1];
            $memo = $result[2];
            $lati = $result[3];
            $longi = $result[4];
        ?>

        var contentString<?php echo $result[0]?> = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading"><?php echo $title?></h1>'+
            '<div id="bodyContent">'+
            '<p><?php echo $memo?></p>'+
            '</div>'+
            '</div>';
        var infowindow<?php echo $result[0]?> = new google.maps.InfoWindow({
            content: contentString<?php echo $result[0]?>
        });

        var myLatLng = {lat: <?php echo $lati?>, lng: <?php echo $longi?>};
        var marker<?php echo $result[0]?> = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: '<?php echo $title?>'
        });
        marker<?php echo $result[0]?>.addListener('click', function() {
            infowindow<?php echo $result[0]?>.open(map, marker<?php echo $result[0]?>);
        });

    <?php
        }
        ?>
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfinta_lc8A__cwgyfe-YUHefgdMeNgOI&callback=initMap"
        async defer></script>

</body>

<?php
include "footer.php";
?>