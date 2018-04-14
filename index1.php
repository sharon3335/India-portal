<?php
$conn = mysql_connect('localhost', 'root','') or die(mysql_error());
mysql_select_db("mainp") or die(mysql_error());
?>

    <html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Google Maps</title>
        <style type="text/css">
            body { font: normal 10pt Helvetica, Arial; }
            #map { width: 100%; height: 700px; border: 0px; padding: 0px; }
        </style>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBTnzwkq9cf0UiZcSU1T7iAfB0rYZilQC4&sensor=false" type="text/javascript"></script>
        <script type="text/javascript">
		

  
   
            //Sample code written by August Li
            var icon ="micon.png"
            var center = null;
            var map = null;
            var currentPopup;
            var bounds = new google.maps.LatLngBounds();
            function addMarker(lat, lng, info) {
                var pt = new google.maps.LatLng(lat, lng);
                bounds.extend(pt);
                var marker = new google.maps.Marker({
                    position: pt,
                    icon: icon,
                    map: map
                });
                var popup = new google.maps.InfoWindow({
                    content: info,
                    maxWidth: 300
                });
                google.maps.event.addListener(marker, "click", function() {
                    if (currentPopup != null) {
                        currentPopup.close();
                        currentPopup = null;
                    }
                    popup.open(map, marker);
                    currentPopup = popup;
                });
                google.maps.event.addListener(popup, "closeclick", function() {
                    map.panTo(center);
                    currentPopup = null;
                });
            }           
            function initMap() {
				
                  var minZoomLevel=4;
				
                map = new google.maps.Map(document.getElementById("map"), {
                     center: new google.maps.LatLng(20.593684, 78.96288000000004),
                    zoom:minZoomLevel ,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    },
                    navigationControl: true,
                    navigationControlOptions: {
                        style: google.maps.NavigationControlStyle.ZOOM_PAN
                    }
                });
<?php



$query = mysql_query("SELECT * FROM poi_example")or die(mysql_error());
while($row = mysql_fetch_array($query))
{
  $name = $row['name'];
  $lat = $row['lat'];
  $lon = $row['lon'];
  $desc = $row['desc'];



  echo("addMarker($lat, $lon, '<b>$name</b><br />$desc');\n");

}

?>
 center = bounds.getCenter();
     map.fitBounds(bounds);

     }
     </script>
     </head>
     <body onload="initMap()" style="margin:0px; border:0px; padding:0px;">
     <div id="map"></div>
     </body>
     </html>
The issue is: addmarker in the call va addMar