<?php
session_start();
?>
<?php
$con = mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($con,"mainp") or die(mysqli_error());
$cat_name=$_GET["cname"];
$loc=$_GET["pid"];
?>
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
						<?php 
					$sql="select * from add_detail where pid='$loc' and cname='$cat_name'";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				?>
																		
			<li class="active"><a accesskey="4" href="#"><?php echo $row['cname'];?>-<?php echo $row['name'];}?></a> <em>(4)</em>
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
					<li><a href="./">Hotel</a></li>
					
					<li>Search Result</li>
							
					<li><?php echo $cat_name;?></li>
				</ul>
			</nav>                
			<section id="content" class="cols-a">
				<article class="vcard">
					<header class="module-a">
						<h2 class="fn org"><?php echo $cat_name;?></h2>
						<p class="rating-a e">3/5</p>
						<p class="link"><a href="./">Return</a></p>
						<p class="addthis_toolbox addthis_default_style addthis_16x16_style"><span>Share:</span> <a class="addthis_button_email"></a> <a class="addthis_button_facebook"></a> <a class="addthis_button_twitter"></a></p>
					</header>
					<?php
					$sql="select * from add_detail where cname='$cat_name'";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				?>
					<div class="slider-a">
			<figure><img src="<?php echo $row['cimg'];}?>"  alt="Placeholder" width="693" height="283"></figure>
						
					</div>
						<?php
					$sql="select * from add_detail where cname='$cat_name'";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				?>
					<div class="tabs-a">
						<ul>
							<li>Overview</li>
							<li>Facilities</li>
							<li>Rating</li>
						</ul>
						<div>
							<div>
								<p><?php echo $row['overview'];?></p>
								<ul class="list-b">
									<li><span>Opening Time:</span> 7 : 00 am</li>
									<li><span>Closing Time:</span> 11 : 00 pm</li>
								</ul>
								
								<p><a rel="external" class="url" href="http://seratonvietnam.com">www.<?php echo $row['cname'];?>.com</a></p>
							</div>
							<div>
								<h3>Facilities</h3>
								<div class="triple-a">
									<ul>
										<li>Wifi</li>
										<li>Beachfront</li>
										<li>Hospital</li>
										
									</ul>
									<ul>
										<li>Wifi</li>
										<li>Taxi &amp; car hire</li>
										
										<li>Coffee bars</li>
									</ul>
									<ul>
										<li>Karaoke</li>
										<li>Foot Massage</li>
										<li>Bars</li>
										
									</ul>
								</div>
								<h3>Profile</h3>
								<!--<p><img src="<?php //echo $row['fimg'];?>"></p>-->
								<iframe width="650" height="300" src="//www.youtube.com/embed/<?php echo $row['fimg'];?>?rel=0" frameborder="0" allowfullscreen></iframe></p>
							</div>
							<div class="double-a">
								<div>
									<h3>Rating</h3>
								<ul class="rating-list-a">
										<li class="c">Clean <span>3/5</span></li>
										<li class="b">Location <span>2/5</span></li>
										<li class="d">Staff <span>4/5</span></li>
										<li class="c">Service <span>3/5</span></li>
										<li class="e">Comfort <span>5/5</span></li>
									</ul>
									<p class="scheme-f"><span>4/5</span><?php echo $row['cname'];?> </p>
								</div>
								<div>
									<h3>Contact Information</h3>
									<p><?php echo $row['visitus'];?></p>
								<!--		<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
										<article>
											<h4>Michael Lee <span>06 / Apry / 2012</span></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit nisl in est consectetur.</p>
										</article>
									</div>-->
								</div>
							</div>
							<div>
							
							</div>
						</div>
			</div><?php }?>
				</article>
				<?php
					$sql="select * from add_detail where cname='$cat_name'";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				?>
				<aside>
					<p class="scheme-a"><?php echo $row['cname'];?><iframe width="242" height="156" marginheight="0" marginwidth="0" src="//www.youtube.com/embed/Mbt4i8m15uc?rel=0" frameborder="0" allowfullscreen></iframe></p>
					<p class="scheme-b">Price From <span>₹1.5k <span>/ Night</span></span></p>
					<form action="book_action.php" method="post" class="form-a">
						<fieldset >
							<legend>Booking form</legend>
							<p>
							<label for="fea">First Name</label>
							<input type="text" id="fea" name="fname" required>
						    </p>
							<p>
							<label for="fea">Last Name</label>
							<input type="text" id="fea" name="lname" required>
						    </p>
							<p>
							<label for="fea">Email</label><br>
							<input type="email" id="fea" name="email" required>
						    </p>
							<p>
							<label for="fea">Mobile</label><br>
							<input type="phone" id="fea" name="mobile" required>
						    </p>
							<p class="date-a">
								<span>
									<label for="faa">Check in</label>
									<input type="text" id="faa" name="fdate" required>
									 
								</span>
								<span>
									<label for="fab">Check Out</label>
									<input type="text" id="fab" name="ldate" required>
								</span>
							</p>
							<p>It all comes back to the basics. Serve customers the best-services at a good value in a clean, comfortable area, and they'll keep coming back...</p>
							<ul class="check-a">
								<li><label for="faca">Single Room <span>₹1500 <span>/ night</span></span><input type="radio" id="faca" name="type" value="Single"></label></li>
								<li><label for="facb">Double Room <span>₹3000 <span>/ night</span></span><input type="radio" id="facb" name="type" value="Double"></label></li>
							</ul>
							<p class="select-a">
								<span>
									<label for="fad">Rooms</label>
									<select id="fad" name="room">
										<option>01</option>
										<option>02</option>
										<option>03</option>
										<option>04</option>
										<option>05</option>
									</select>
								</span>
								<span>
									<label for="fae">Adults</label>
									<select id="fae" name="adult">
										<option>01</option>
										<option>02</option>
										<option>03</option>
										<option>04</option>
										<option>05</option>
									</select>
								</span>
								<span>
									<label for="faf">Child</label>
									<select id="faf" name="child">
										<option>01</option>
										<option>02</option>
										<option>03</option>
										<option>04</option>
										<option>05</option>
									</select>
								</span>
							</p>
							<p class="scheme-c"><input type="text" name="hotel" value="<?php echo $row['cname'];?>" hidden></p>
							<p><input type="text" name="place" value="<?php echo $row['name'];?>" hidden></p>
							<p class="submit"><button type="submit">Book now</button></p>
						</fieldset>
					</form>
					
				</aside><?php }?>
			</section>
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