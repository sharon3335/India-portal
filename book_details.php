<?php
session_start();
$email=$_SESSION["email"];

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Booking confirm - Hotel</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="javascript/head.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/screen.css" media="screen">
		<link rel="stylesheet" type="text/css" href="styles/print.css" media="print">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<script>
		function print()
		{
			window.alert("Reserved..!!");
		}
		</script>
	</head>
		<?php
$con = mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($con,"mainp") or die(mysqli_error());
	
					$sql="select * from booking where email='$email'";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				?>
	<body>
		<div id="root">
			<header id="top">
				<h1><a href="./" accesskey="h"></a></h1>
				<nav id="skip">
								<?php 	
			$diff = abs(strtotime($row['odate']) - strtotime($row['cdate']));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

?>
<?php
						$rest=$row['price']*$days*$row['rooms'];
					    $rt=($rest*10)/100;
						$rest=$rest+$rt;
						?>
					<ul>
						<li><a href="#nav" accesskey="n">Skip to navigation (n)</a></li>
						<li><a href="#content" accesskey="c">Skip to content (c)</a></li>
						<li><a href="#footer" accesskey="f">Skip to footer (f)</a></li>
					</ul>
				</nav>
				<nav id="nav">
					<ul class="primary">
						<li><a accesskey="1" href="index.html"></a><em>(1)</em></li>
					
										
<li class="active"><a accesskey="4" href="#">BOOKING CONFIRMATION </a> <em>(4)</em>
						
					</ul>
					<ul class="secondary">
						<p class="gb"><span>Call us:8281526518</span></p>
						</ul>	
						<ul class="secondary">
						<br><p class="gb"><span>Email:sharonau2963@gmail.com</span></p>
					</ul>
				
				</nav>
				<form action="./" method="post" id="search">
					<fieldset>
						<legend>Search</legend>
						<p>
							<label for="sa">Search</label>
							<input type="text" id="sa" name="sa" required>
							<button type="submit">Submit</button>
						</p>
					</fieldset>
				</form>
				<p class="tel"><span>India Portal</span></p>
			</header>    
		

			<h2><span>Thank you</span>, your booking is complete</h2>  
			<p>Your confirmation number is <span>22368<?php echo $row['book_id'];?></span></p>     
					
			<article id="content" class="cols-d">
				<div>
				
					<h3>Travel Information</h3>
					<h4 class="scheme-g">Traveller Infomation</h4>
					<ul class="list-c">
						<li><span>First Name</span><?php echo $row['fname'];?> </li>
						<li><span>Last Name</span><?php echo $row['lname'];?> </li>
						<li><span>Email Address</span> <span class="email"><?php echo $row['email'];?> </span></li>
						<li><span>Mobile</span><?php echo $row['mobile'];?> </li>
					</ul>
					<h4 class="scheme-g">Payment</h4>
					<p>Payment can be done in any way,can be through online or as direct payment.Credit card can be acceptable. </p>
					<h4 class="scheme-g">Special Request</h4>
					<p>Lorem ipsum dolor sit saelas met, consecttur ads ipi deese cing elit. Mauris fringilla bibe endums. Lorem ipsum dolor sit saelas met, consecttur ads ipi deese cing elit. Mauris fringilla </p>
					<p class="scheme-h">Grand Total : <span><span> ₹</span><?php echo $rest;?></span></p>
					<p class="link-c"><a href="./" onClick="print();">Reservation</a> <a href="./" onClick="window.print()">Print receipt</a></p>
				</div>
				<aside>
					<h3>Hotel Summary</h3>
					<div class="vcard a">
						<h4 class="fn org"><?php echo $row['hotel_name'];?></h4>
						<p class="adr"><?php echo $row['hotel_name'];?> - <span class="locality"></span><span class="country-name"><?php echo $row['place'];?></span></p>
						<p class="rating-a e">4/5</p>
					</div>
					<h4 class="scheme-g">Summary</h4>
					<ul class="list-c">
						<li><span>Room</span><?php echo $row['room_type'];?> Room</li>
						<li><span>Price per night</span> ₹<?php echo $row['price'];?></li>
						<li><span>Check in</span><?php echo $row['cdate'];?></li>
						<li><span>Check out</span><?php echo $row['odate'];?></li>
					</ul>

					<h4 class="scheme-g">Charges</h4>
					<ul class="list-c">
						<li><span>Time</span> <?php echo $days;?> Nights</li>
						<li><span>Guests</span> <?php echo $row['adult'];?> Adult, <?php echo $row['child'];?> child</li>
						
						<li><span>VAT</span> 10%</li>
						<li><span>Fees</span> Included</li>
						<li><span>Grand Total</span> ₹<?php echo $rest;?></li>
					</ul>
				</aside>
			</article><?php}?>
			<footer id="footer">
				<nav>
					<div class="vcard">
						<h3>Contact us <span class="fn org">Asean Tourist</span></h3>
						<ul class="list-a">
							<li><span>Tell</span> <span class="tel">(84) 888 888 888</span></li>
							<li><span>Email</span> <a class="email">contact//travel/com</a></li>
							<li class="adr"><span>Add</span> <span class="street-address">Street</span>, <span class="locality">Hanoi</span> City, <span class="country-name">Vn</span></li>
						</ul>
					</div>
					<div>
						<h3>Support &amp; Help</h3>
						<ul>
							<li><a href="./">Payment options</a></li>
							<li><a href="./">FAQ</a></li>
							<li><a href="./">Privacy &amp; Policy</a></li>
						</ul>
					</div>
					<div>
						<h3>Information</h3>
						<ul>
							<li><a href="./">My account</a></li>
							<li><a href="./">Sit map</a></li>
							<li><a href="./">Order history</a></li>
						</ul>
					</div>
					<form action="./" method="post">
						<fieldset>
							<legend>Newsletter</legend>
							<p>Lorem emphasised est dolor sit ams...</p>
							<p>
								<label for="na">Enter your email</label>
								<input type="email" id="na" name="na" required>
								<button type="submit">Submit</button>
							</p>
						</fieldset>
					</form>
				</nav>
				<p>Copyright &copy; <span class="date">2013</span>. All rights reseved <a href="./">Asean Tourist</a></p>
				<ul id="social">
					<li class="rs"><a rel="external" href="./">RSS</a></li>
					<li class="tw"><a rel="external" href="./">Twitter</a></li>
					<li class="fl"><a rel="external" href="./">Flickr</a></li>
					<li class="fb"><a rel="external" href="./">Facebook</a></li>
				</ul>
			</footer>
		</div>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;language=en"></script>
		<script type="text/javascript">
			head.js('javascript/jquery.min.js','javascript/jquery-ui.min.js','javascript/scripts.js','javascript/mobile.js')
		</script>
	</body><?php }?>
</html>