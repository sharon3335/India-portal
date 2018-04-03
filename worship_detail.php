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
						<p class="rating-a f">3/5</p>
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
							<li>About Us</li>
							<li>Church Services</li>
						</ul>
						<div>
							<div>
								<p><?php echo $row['overview'];?></p>
								<ul class="list-b">
								   <h4>Holy Mass</h4>
									<li><span>Monday to Friday:</span> 6 : 30 am</li>
									<li><span>Saturday</span> 6 : 45 am</li>
								</ul>
								
								<p><a rel="external" class="url" href="http://seratonvietnam.com">www.<?php echo $row['cname'];?>.com</a></p>
							</div>
							<div>
								<h3></h3>
								<div class="triple-c">
								<p>A church service (also called a service of worship, or simply a service) is a formalized period of communal worship in Christian tradition. It often but not exclusively occurs on Sunday, or Saturday in the case of those churches practicing seventh-day Sabbatarianism. The church service is the gathering together of Christians to be taught the 'Word of God' (the Christian Bible) and encouraged in their faith. Technically, the "church" in "church service" refers to the gathering of the faithful rather than to the building in which it takes place. In most Christian traditions, services are presided over by clergy wherever possible </p>
								</div>
								<h3>Vicar-<?php echo $row['cname'];?></h3>
								<p><img src="<?php echo $row['fimg'];?>"></p>
							</div>
							<div class="double-a">
								<div>
									<h3>Sunday Mass Services</h3>
								<ul class="rating-list-a">
										<li >06:00 am Holy Mass </li>
										<li >08:15 am Holy Mass </li>
										<li >10:00 am Holy Mass </li>
										<li >05:00 pm Holy Mass </li>
										<li >06:00 am Holy Mass </li>
									</ul>
									
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
					<p class="scheme-a"><?php echo $row['cname'];?><iframe width="242" height="156" marginheight="0" marginwidth="0" src="//www.youtube.com/embed/6LkD_h_PtSs?rel=0" frameborder="0" allowfullscreen></iframe></p>
					<p ><span><b><u>Nearby</u></b></span></span></p>
					<form action="./" method="post" class="form-a">
						<fieldset>
							<legend>Table Booking form</legend>
							<p >St.Thomas Church,<?php echo $row['name'];?></p>
							<p>
								
								
								<img src="images/near.jpg" />
								
							</p>
							<p> </p>
							<h5><u>Related Links</u></h5><br>
							<p>
							KeralaMatrimony is a pioneer in the matrimonial space and has helped Kerala Brides and Kerala Grooms find each other to tie the holy bond of marriage.<br>
							<a style="z-index:1,display:block,position:relative;overflow: hidden;-webkit-transition:0.3s;-moz-transition:0.3s;-o-transition: 0.3s; -ms-transition:0.3s;transition:0.3s;" href="http://profile.keralamatrimony.com/chat/">
							<img src="images/ad.jpg" />
							</a>
							</p>
						<!--		<span>
									<label for="fad">Day</label>
									<select id="fad" name="fad">
										<option>01</option>
										<option>02</option>
										<option>03</option>
										<option>04</option>
										<option>05</option>
									</select>
								</span>
								<span>
									<label for="fae">Month</label>
									<select id="fae" name="fae">
										<option>01</option>
										<option>02</option>
										<option>03</option>
										<option>04</option>
										<option>05</option>
									</select>
								</span>
								<span>
									<label for="faf">Year</label>
									<select id="faf" name="faf">
										<option>1990</option>
										<option>02</option>
										<option>03</option>
										<option>04</option>
										<option>05</option>
									</select>
								</span>
							</p>-->
							<p class="scheme-c">Signup for free <span><span></span></span></p>
							
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