<?php
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'mainp');
$name = $_GET['name'];
$des= $_GET['address'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];




$sql2="INSERT INTO `state`(`sname`, `desc`, `lat`, `lon`) VALUES ('$name','$des','$lat','$lng')";
$result2= mysqli_query($con,$sql2);
if (!$result2) {
  die('Invalid query: ' . mysqli_error());
}

//require("dbcon.php");

// Gets data from URL parameters.
//$name = $_GET['name'];
//$address = $_GET['address'];
//$lat = $_GET['lat'];
//$lng = $_GET['lng'];

// Opens a connection to a MySQL server.
//$connection=mysqli_connect ("localhost","root","");
//if (!$connection) {
 // die('Not connected : ' . mysqli_error());
//}

// Sets the active MySQL database.
//$db_selected = mysqli_select_db('mainp', $connection);
//if (!$db_selected) {
  //die ('Can\'t use db : ' . mysqli_error());
//}

// Inserts new row with place data.
//$query = sprintf("INSERT INTO poi_example " .
      //   " (id, name, desc, lat, lon ) " .
     //    " VALUES (NULL, '%s', '%s', '%s', '%s');",
      //   mysqli_real_escape_string($name),
      //   mysqli_real_escape_string($address),
      //   mysqli_real_escape_string($lat),
      //   mysqli_real_escape_string($lng),
         

//$result = mysqli_query($connection,$query);

//if (!$result) {
 // die('Invalid query: ' . mysqli_error());
//}

?>

