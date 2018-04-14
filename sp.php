<?php

$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'mainp');
$sql="select * from booking where email='rohan@gmail.com'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
			{
				echo $row['cdate'].'<br>'.;
				echo $row['odate'].'<br>';
			
			$diff = abs(strtotime($row['odate']) - strtotime($row['cdate']));
}
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
echo $days;
echo $diff1;
?>