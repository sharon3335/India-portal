<!DOCTYPE html>

<html>
<head>
    <title>India Portal</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="css/jcss/bootstrap.css">
    <link rel="stylesheet" href="css/jcss/font-awesome.css">
    <link rel="stylesheet" href="css/jcss/icomoon.css">
    <link rel="stylesheet" href="css/jcss/styles.css">
    <link rel="stylesheet" href="css/jcss/mystyles.css">
    <script src="js/jjss/modernizr.js"></script>

  <style>
    #map {
      height: 100%;
    }

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body onLoad="initMap()">
   <div height="10px" style="background-color:black;">
   <form action='admin.php'>
   <input type='submit' value='Back to home' class='btn btn-primary'>
   </form>
   </div>   
  <div id="map" width="100%"></div>
  <div id="form">
    <table>
      <tr><td>Name:</td> <td><input type='text' class='form-control' id='name' /> </td> </tr>
      <tr><td>Description:</td> <td><input type='text' class='form-control' id='address' /> </td> </tr>
	  
     <!-- <tr>
        <td>Type:</td>
        <td>
          <select id='type'>
            +
            <option value='bar' SELECTED>bar</option>
            <option value='restaurant'>restaurant</option>
          </select>
        </td>
      </tr>-->
      <tr><td></td><td><input type='button' class='btn btn-primary'  value='Save' onclick='saveData()' /></td></tr>
    </table>
  </div>
  <div id="message">Location saved</div>
  <script>
    var map;
    var marker;
    var infowindow;
    var messagewindow;

    function initMap() {
      var location = { lat: 20.644800, lng: 77.216721 };
      map = new google.maps.Map(document.getElementById('map'), {
        center: location,
        zoom: 5
      });

      infowindow = new google.maps.InfoWindow({
        content: document.getElementById('form')
      });

      messagewindow = new google.maps.InfoWindow({
        content: document.getElementById('message')
      });

      google.maps.event.addListener(map, 'click', function (event) {
        marker = new google.maps.Marker({
          position: event.latLng,
          map: map
        });


        google.maps.event.addListener(marker, 'click', function () {
          infowindow.open(map, marker);
        });
      });
    }

    function saveData() {
      var name = escape(document.getElementById('name').value);
      var address = escape(document.getElementById('address').value);
    //  var type = document.getElementById('type').value;
      var latlng = marker.getPosition();
      var url = 'state_action.php?name=' + name + '&address=' + address +
         '&lat=' + latlng.lat() + '&lng=' + latlng.lng();
		
      downloadUrl(url, function (data, responseCode) {

        if (responseCode == 200 && data.length <= 1) {
          infowindow.close();
          messagewindow.open(map, marker);
        }
		 
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

      request.onreadystatechange = function () {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request.responseText, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
	  
	 
    }

    function doNothing() {
    }

  </script>
  <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTnzwkq9cf0UiZcSU1T7iAfB0rYZilQC4">
  </script>
  <script src="js/jjss/jquery.js"></script>
        <script src="js/jjss/bootstrap.js"></script>
        <script src="js/jjss/slimmenu.js"></script>
        <script src="js/jjss/bootstrap-datepicker.js"></script>
        <script src="js/jjss/bootstrap-timepicker.js"></script>
        <script src="js/jjss/nicescroll.js"></script>
        <script src="js/jjss/dropit.js"></script>
        <script src="js/jjss/ionrangeslider.js"></script>
        <script src="js/jjss/icheck.js"></script>
        <script src="js/jjss/fotorama.js"></script>
      
        <script src="js/jjss/typeahead.js"></script>
        <script src="js/jjss/card-payment.js"></script>
        <script src="js/jjss/magnific.js"></script>
        <script src="js/jjss/owl-carousel.js"></script>
        <script src="js/jjss/fitvids.js"></script>
        <script src="js/jjss/tweet.js"></script>
        <script src="js/jjss/countdown.js"></script>
        <script src="js/jjss/gridrotator.js"></script>
        <script src="js/jjss/custom.js"></script>
</body>
</html>