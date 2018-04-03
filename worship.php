<?php
session_start();
$con = mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($con,"mainp") or die(mysqli_error());
$location=$_SESSION["place"];
$loc=str_replace("<b>", "",$location);
$select_id="select * from `poi_example` where `name`='$loc'";
$result=mysqli_query($con,$select_id);
while($row=mysqli_fetch_array($result))
{
$location_id=$row['pid'];
}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Hotel List Page - India Portal</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="javascript/head.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/screen.css" media="screen">
		<link rel="stylesheet" type="text/css" href="styles/print.css" media="print">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	</head>
	<body>
		<div id="root">
			<header id="top">
				<h1><a href="./" accesskey="h"></a></h1>
				<nav id="skip">
					<ul>
						<li><a href="#nav" accesskey="n">Skip to navigation (n)</a></li>
						<li><a href="#content" accesskey="c">Skip to content (c)</a></li>
						<li><a href="#footer" accesskey="f">Skip to footer (f)</a></li>
					</ul>
				</nav>
				<nav id="nav">
					<ul class="primary">
						<li><a accesskey="1" href="index.html"></a> <em>(1)</em></li>
																		
						<li class="active"><a accesskey="4" href="#"><?php echo $loc;?>-TOURIST SPOT</a> <em>(4)</em>
							<!--<ul>
								<li><a href="hotel-index.html">Hotel List</a></li>
								<li><a href="hotel-details.html">Hotel Details</a></li>
								
							</ul>-->
						</li>

					<!--	<li><a accesskey="5" href="#">Booking Pages</a> <em>(5)</em>
							<ul>
								<li><a href="booking-view.html">Booking View</a></li>
								<li><a href="booking-confirm.html">Booking Confirm</a></li>
							</ul>
						</li>-->
						
					
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
			<nav id="breadcrumbs">
				<ul>
					<li><a href="./">Home</a></li>
					
					
						<li><?php echo $loc;?></li>
				</ul>
			</nav>                
			<?php
			$sql="select * from add_spec where pid='$location_id'";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
			?>
			<article id="content" class="cols-c">
				<div>
					<div class="slider-a">
			<figure class="image-b"><img src="<?php echo $row['pimg'];}?>"  alt="Placeholder" width="693" height="276"> <figcaption><h4 style="color:black;"></h4></figcaption></figure>
					<!--	<figure class="image-a"><img src="temp/693x276(1).gif" alt="Placeholder" width="693" height="276"> <figcaption>Paris Eurostar Breaks <span>Curabitur fringilla mauris interdum nec magna</span> <span>From $350</span></figcaption></figure>
						<figure><img src="temp/693x276(2).gif" alt="Placeholder" width="693" height="276"></figure>-->
					</div>
					<form action="./" method="post" class="module-b">
						<fieldset>
							<p>
							<h2>Worship Centers in <?php echo $loc;?></h2>
							</p>
						</fieldset>
					</form>
					<div class="news-a">
					<?php
			$sql="select * from add_detail where pid='$location_id' and category='Worship Center'";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
			?>
						<article>
							<header>
			<h2><a href="worship_detail.php?cname=<?php echo $row['cname'];?>&pid=<?php echo $row['pid'];?>"><?php echo $row['cname'];?></a></h2>
					<?php
			//$sql="select * from add_detail where pid='$location_id' and category='Hospital'";
			//$result=mysqli_query($con,$sql);
			//while($row=mysqli_fetch_array($result))
			//{
			//?>
								<figure><img src="<?php echo $row['cimg'];?>"  alt="Placeholder" width="128" height="156"> <figcaption></figcaption></figure>
								<p><span class="rating-a f">0/5</span><?php echo $loc;?> </p>
							</header>
							<?php
			//$sql="select * from add_detail where pid='$location_id' and category='Hospital'";
			//$result=mysqli_query($con,$sql);
			//while($row=mysqli_fetch_array($result))
			//{
			//?>
							<p><?php echo $row['descr'];?></p>
							<!--<p class="scheme-d"><span>$</span>900 <span class="a"><span>$</span>600</span> <a href="./">Book</a></p>-->
							<footer>
								<p>User Rating <span class="rating-b a">/5</span></p>
								
							</footer>
			</article><?php } ?>
						<!--<article>
							<header>
								<h2><a href="#">Taj hanoi Hotel</a></h2>
								<figure><img src="temp/128x102(1).gif"  alt="Placeholder" width="128" height="102"> <figcaption>02</figcaption></figure>
								<p><span class="rating-a b">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
							</header>
							<p>Lorem ipsum dolor sit saelas met, consectetur adipi deese cing elit. Maus fringilla bibe endum es leo. Sorem ipsum dolor...</p>
							<p class="scheme-d"><span>$</span>500 <span class="b">hot</span> <a href="./">Book</a></p>
							<footer>
								<p>User Rating <span class="rating-b b">0/5</span></p>
								
							</footer>
						</article>
					<!--	<article>
							<header>
								<h2><a href="#">Hanoi Sheraton Hotel</a></h2>
								<figure><img src="temp/128x102(2).gif"  alt="Placeholder" width="128" height="102"> <figcaption>03</figcaption></figure>
								<p><span class="rating-a c">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
							</header>
							<p>Lorem ipsum dolor sit saelas met, consectetur adipi deese cing elit. Maus fringilla bibe endum es leo. Sorem ipsum dolor...</p>
							<p class="scheme-d"><span>$</span>810 <a href="./">Book</a></p>
							<footer>
								<p>User Rating <span class="rating-b c">0/5</span></p>
								<p class="link-b"><a href="./">View Details</a></p>
							</footer>
						</article>
						<article>
							<header>
								<h2><a href="#">Lorem Impsum Hotel</a></h2>
								<figure><img src="temp/128x102(3).gif"  alt="Placeholder" width="128" height="102"> <figcaption>04</figcaption></figure>
								<p><span class="rating-a d">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
							</header>
							<p>Lorem ipsum dolor sit saelas met, consectetur adipi deese cing elit. Maus fringilla bibe endum es leo. Sorem ipsum dolor...</p>
							<p class="scheme-d"><span>$</span>600 <a href="./">Book</a></p>
							<footer>
								<p>User Rating <span class="rating-b d">0/5</span></p>
								<p class="link-b"><a href="./">View Details</a></p>
							</footer>
						</article>
						<article>
							<header>
								<h2><a href="#">Just Another Hotel</a></h2>
								<figure><img src="temp/128x102(4).gif"  alt="Placeholder" width="128" height="102"> <figcaption>05</figcaption></figure>
								<p><span class="rating-a e">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
							</header>
							<p>Lorem ipsum dolor sit saelas met, consectetur adipi deese cing elit. Maus fringilla bibe endum es leo. Sorem ipsum dolor...</p>
							<p class="scheme-d"><span>$</span>350 <a href="./">Book</a></p>
							<footer>
								<p>User Rating <span class="rating-b e">0/5</span></p>
								<p class="link-b"><a href="./">View Details</a></p>
							</footer>
						</article>
						<article>
							<header>
								<h2><a href="#">Sheraton hanoi Hotel</a></h2>
								<figure><img src="temp/128x102(5).gif"  alt="Placeholder" width="128" height="102"> <figcaption>06</figcaption></figure>
								<p><span class="rating-a f">0/5</span>Seraton Hotel - Hanoi, Vietnam </p>
							</header>
							<p>Lorem ipsum dolor sit saelas met, consectetur adipi deese cing elit. Maus fringilla bibe endum es leo. Sorem ipsum dolor...</p>
							<p class="scheme-d"><span>$</span>499 <a href="./">Book</a></p>
							<footer>
								<p>User Rating <span class="rating-b f">0/5</span></p>
								<p class="link-b"><a href="./">View Details</a></p>
							</footer>
						</article>-->
						<footer>
							<nav class="pagination-a">
								<p>Page 01 of 06</p>
								<ol>
									<li class="prev"><a href="./">Previous</a></li>
									<li class="active"><a href="./">01</a></li>
									<li><a href="./">02</a></li>
									<li><a href="./">03</a></li>
									<li><a href="./">04</a></li>
									<li class="next"><a href="./">Next</a></li>
								</ol>
							</nav>
						</footer>
					</div>
				</div>
				<aside>
					
					<form action="./" method="post" class="form-d">
						<fieldset>
							<legend>Refine search result</legend>
							<div class="accordion-a">
								<h3 class="active">Price Range</h3>
								<div>
									<div class="bar-a"></div>
								</div>
								<h3 class="active">Star Rating</h3>
								<div>
									<div class="bar-b"></div>
								</div>
								<h3 class="active">Accommodations Type</h3>
								<div>
									<ul class="check-d">
										<li><label for="cda"><input type="checkbox" id="cda" name="cda"> Apartments</label></li>
										<li><label for="cdb"><input type="checkbox" id="cdb" name="cdb"> Hotels</label></li>
										<li><label for="cdc"><input type="checkbox" id="cdc" name="cdc"> Gest House</label></li>
										<li><label for="cdd"><input type="checkbox" id="cdd" name="cdd"> Bed &amp; Breakfast</label></li>
										<li><label for="cde"><input type="checkbox" id="cde" name="cde"> Apartments</label></li>
										<li><label for="cdf"><input type="checkbox" id="cdf" name="cdf"> Farm Stay</label></li>
									</ul>
								</div>
								<h3 class="active">Hotel Facilities</h3>
								<div>
									<ul class="check-d">
										<li><label for="cdg"><input type="checkbox" id="cdg" name="cdg"> Wifi</label></li>
										<li><label for="cdh"><input type="checkbox" id="cdh" name="cdh"> Parking</label></li>
										<li><label for="cdi"><input type="checkbox" id="cdi" name="cdi"> Airport Shuttle</label></li>
										<li><label for="cdj"><input type="checkbox" id="cdj" name="cdj"> Restaurant</label></li>
										<li><label for="cdk"><input type="checkbox" id="cdk" name="cdk"> Family rooms</label></li>
										<li><label for="cdl"><input type="checkbox" id="cdl" name="cdl"> Pay TV</label></li>
									</ul>
								</div>
								<h3>Hotel Theme</h3>
								<div>
									<p>Hotel Theme</p>
								</div>
								<h3>Accessibility Options</h3>
								<div>
									<p>Accessibility Options</p>
								</div>
								<h3>Payment Options</h3>
								<div>
									<p>Payment Options</p>
								</div>
							</div>
							<p class="submit"><button type="reset">Reset all</button></p>
						</fieldset>
					</form>
				</aside>
			</article>
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
	</body>
</html>