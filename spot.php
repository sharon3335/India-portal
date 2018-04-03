<?php
$conn = mysql_connect('localhost', 'root','') or die(mysql_error());
mysql_select_db("mainp") or die(mysql_error());
?>

    <html>
    <head>
	    <script type="text/javascript">
        function change(name)
        {
			var a=name;
          var xmlhttp;
            if(window.XMLHttpRequest)
            {
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                xmlhttp=new ActiveXObject("Microsoft.XMLHttp");
            }
           xmlhttp.onreadystatechange=function()
            {
               if(xmlhttp.readyState && xmlhttp.status==200)
                   {
                       //document.getElementById("").innerHTML=xmlhttp.responseText;
					  // alert("SESSION= "+xmlhttp.responseText);
                   }
            }
           ob=a;
           //alert("name= "+ob);
           xmlhttp.open("GET","get.php?a="+ob,true);
           xmlhttp.send();
        }
		</script>
        <title>India Portal</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">
		
		  <link rel="stylesheet" href="css/sidebar/assets/demo.css">
	<link rel="stylesheet" href="css/sidebar/assets/sidebar-collapse.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">India Portal</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="index.php">WELCOME</a></li>
                            <li><a class="color_animation" href="about.php">ABOUT</a></li>
                           <!-- <li><a class="color_animation" href="#pricing">PRICING</a></li>
                            <li><a class="color_animation" href="#beer">BEER</a></li>
                            <li><a class="color_animation" href="#bread">BREAD</a></li>
                            <li><a class="color_animation" href="#featured">FEATURED</a></li>-->
                            <li><a class="color_animation" href="confused.php">CONFUSED?</a></li>
                            <li><a class="color_animation" href="contact.php">CONTACT</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
       
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
				var name = info.split(":");
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
					change(name[0]);
					document.getElementById("asd").style.visibility = "visible";
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



  echo("addMarker($lat, $lon, '<b>$name:</b><br />$desc');\n");

}

?>
 center = bounds.getCenter();
     map.fitBounds(bounds);

     }
     </script>
     </head>
     <body onload="initMap()" style="margin:0px; border:0px; padding:0px;" >
	 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">India Portal</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="index.php">WELCOME</a></li>
                            <li><a class="color_animation" href="about.php">ABOUT</a></li>
                           <!-- <li><a class="color_animation" href="#pricing">PRICING</a></li>
                            <li><a class="color_animation" href="#beer">BEER</a></li>
                            <li><a class="color_animation" href="#bread">BREAD</a></li>
                            <li><a class="color_animation" href="#featured">FEATURED</a></li>-->
                            <li><a class="color_animation" href="confused.php">CONFUSED?</a></li>
                            <li><a class="color_animation" href="contact.php">CONTACT</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
		<aside class="sidebar-left-collapse" id="asd" style="top:40px;bottom:55px; z-index:2; visibility:hidden;" >

		<a href="#" ><img src="kerala.jpg" class="company-logo" width="120px" height="120px" /></a>

		<div class="sidebar-links">

			<div class="link-blue selected">

				<a href="#">
					<img src="ov.png" width="20px" height="20px"></img>&nbsp;&nbsp;Overview
				</a>

				<ul class="sub-links" id="overview" style="overflow-y: scroll;">
					 Kerala, a state in Southern India is known as a tropical paradise of waving palms and wide sandy beaches. It is a narrow strip of coastal territory that slopes down the Western Ghats in a cascade of lush green vegetation, and reaches to the Arabian sea.
				</ul>

			</div>

			<div class="link-yellow">

				<a href="result_index.php">
			    <img src="images/hicon.png" width="20px" height="20px"></img>&nbsp;&nbsp;Hotels
				</a>

				<ul class="sub-links" style="overflow-y: scroll;" >
					
				</ul>

			</div>

			<div class="link-red">

				<a href="restaurant.php">
					<img src="images/ricon.png" width="20px" height="20px"></img>&nbsp;&nbsp;Restaurants
				</a>

				<ul class="sub-links">
					Current population: <br/>3.48 crores<br/>
					Male population: <br/>51.6%<br/>
					Female population:<br/>48.4%
				</ul>

			</div>

			<div class="link-green">

				<a href="worship.php">
					<img src="images/wicon.png" width="20px" height="20px"></img>&nbsp;&nbsp;Worship Centers
				</a>

				<ul class="sub-links" style="overflow-y: scroll;">
					Official language:<br/>
					Malayalam
  </ul>

			</div>

			<div class="link-blue">

				<a href="hospital.php">
					<img src="images/hoicon.png" width="20px" height="20px"></img>&nbsp;&nbsp;Hospitals
				</a>

				<ul class="sub-links" style="overflow-y: scroll;">
					Official language:<br/>
					Malayalam
  </ul>

			</div>
		</div>

	</aside>
		
		
     <div id="map"></div>
     </body>
	 <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; India portal 2018, Created by <a href="https://www.linkedin.com/in/sharon-augustine-08b076157/">Sharon</a></p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Follow us</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Built With Care By <a href="#" target="_blank">Us</a></p></div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>
     </html>
