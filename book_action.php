<?php
session_start();
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'mainp');

$hotel=$_POST["hotel"];
$loc=$_POST["place"];

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$mob=$_POST["mobile"];
$cdate=$_POST["fdate"];
$odate=$_POST["ldate"];
$type=$_POST["type"];

$room=$_POST["room"];
$adult=$_POST["adult"];
$child=$_POST["child"];
if($type=="Single")
{
	$price=1500;
}
else
{
	$price=3000;
}
$_SESSION["email"] = $email;

$sql="insert into booking(hotel_name,place,fname,lname,email,mobile,cdate,odate,room_type,price,rooms,adult,child) values('$hotel','$loc','$fname','$lname','$email','$mob','$cdate','$odate','$type','$price','$room','$adult','$child')";
$res=mysqli_query($con,$sql);
if($res)
{
	header('location:book_details.php');
}
else
	{
		echo mysqli_error($con);
	}
?>