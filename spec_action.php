<?php

$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'mainp');

extract($_REQUEST);
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUplaod"]["name"]);

//echo $templeimage=$_FILES["fileToUplad"]["name"];
 if(move_uploaded_file($_FILES["fileToUplaod"]["tmp_name"],$target_file)) {
      
	  //echo "The file ". basename( $_FILES["fileToUplad"]["name"]). " has been uploaded.";

	  $full1=$target_dir.basename( $_FILES["fileToUplaod"]["name"]);
	  //echo $full;
    } 
	
	else {
	    echo "Sorry, there was an error uploading your file.";
    }				
//echo $sql="SELECT pid FROM poi_example where ";					
//$result=mysqli_query($con,$sql);
//while($row=mysqli_fetch_array($result))
//{

$location=$_POST["location"];
$des=$_POST["des"];
$purpose=$_POST["purpose"];
$interest=$_POST["interest"];
$season=$_POST["season"];
$person=$_POST["person"];
$stay=$_POST["stay"];
$transport=$_POST["transport"];
//echo $location;
//echo $category;
//echo $cname;
//echo $description;


$select_id="select * from `poi_example` where `name`='$location'";
$result=mysqli_query($con,$select_id);

while($row=mysqli_fetch_array($result))
	
{
$location_id=$row[0];
}
//echo $location_id;
$sql="insert into add_spec(name,pid,pimg,des,purpose,interest,season,sperson,stay,transport) values('$location','$location_id','".$full1."','$des','$purpose','$interest','$season','$person','$stay','$transport')";
$res=mysqli_query($con,$sql);

if($res)
{
	header('location:place_spec.php');
}

