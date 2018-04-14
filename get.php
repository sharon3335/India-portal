<?php
session_start();
$str = $_GET["a"];
//$name=chop($str,"<b> ");
//$con=mysqli_connect('localhost','root','');
//$db=mysqli_select_db($con,'mainp');
//$sql="select * from add_detail where name='$name'";
//mysqli_query($con,$sql);

$_SESSION["place"] = $str;
//echo $_SESSION["place"];
?>