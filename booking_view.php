<?php
session_start();
?>


<!DOCTYPE HTML>
<html>

<head>
    <title>India Portal</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="css/jcss/bootstrap.css">
    <link rel="stylesheet" href="css/jcss/font-awesome.css">
    <link rel="stylesheet" href="css/jcss/icomoon.css">
    <link rel="stylesheet" href="css/jcss/styles.css">
    <link rel="stylesheet" href="css/jcss/mystyles.css">
    <script src="js/jjss/modernizr.js"></script>



</head>

<body>


    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="admin.php">
                                <h3 style="color:#FFF; font-family:Verdana, Geneva, sans-serif;"><b>India Portal</b></h3>
                            </a>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            <form class="main-header-search">
                                <div class="form-group form-group-icon-left">
                                    <i class="fa fa-search input-icon"></i>
                                    <input type="text" class="form-control">
                                </div>
                            </form>
                        </div>
                        <?php
                                        if(isset($_SESSION['username']))
										{
											?>
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-avatar">
                                        
                                        
										<a href="admin.php">
                                         <?php
										include('dbcon.php');

$sql="SELECT propic FROM login where uname='".$_SESSION['username']."'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
										echo '<img class="origin round" src="'.$row[0].'" alt="Image Alternative text" title="AMaze" />';?> <?php echo $_SESSION['username'];?></a>
                                    </li>
                                    <li><a href="logout.php">Log Out</a>
                                    </li>
                                    
                                   </ul>
                            </div>
                        </div>
                        <?php
										}

                                        else
                                        {
                                        ?>
                                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-avatar" >
                                        
                                        
										<a href="login.php" style="font-size:16px;">
Login?</a>
                                    </li>
                        
                                    
                                   </ul>
                            </div>
                        </div>
                                        <?php
                                        }
										?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <ul class="slimmenu" id="slimmenu">
                        <li class="active"><a href="admin.php">Home</a>
                            
                        </li>
						<li class="active">
                            
                        </li>
						<li class="active">
                            
                        </li>
                         <li class="active"><a href="save.php">Add Location</a>
                            
                        </li><li class="active">
                            
                        </li>
						<li class="active">
                            
                        </li>
						
                        <li class="active"><a href="add_details.php">Add Details</a>
                            
                        </li>
                        <li class="active">
                            
                        </li>
						<li class="active">
                            
                        </li>
                        <li class="active"><a href="place_spec.php">Add Place Specifications</a>
                            
                        </li>
						 <li class="active">
                            
                        </li>
						<li class="active">
                            
                        </li>
                        <li class="active"><a href="booking_view.php">View Booking Details</a>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </header>
		</div>
      <div class="container">
            <h1 class="page-title">Admin Panel</h1>
        </div>
 <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="user-profile-sidebar">
                        <div class="user-profile-avatar text-center">
                         <?php
										include('dbcon.php');

$sql="SELECT propic FROM login where uname='".$_SESSION['username']."'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
                            echo'<img src="'.$row[0].'" alt="Image Alternative text" title="AMaze" />'?>
                            <h5><?php echo $_SESSION['username'];?></h5>
                            <p>Member Since May 2012</p>
                        </div>
                     <ul class="list user-profile-nav">
                        	</li>
                            <li><a href="admin.php"><i class="fa fa-user"></i>My Profile</a>
                            </li>
                            <li><a href="save.php"><i class="fa fa-heart-o"></i>Add Location</a>
                            </li>
                            <li><a href="add_details.php"><i class="fa fa-heart-o"></i>Add Details</a>
                            </li>
							<li><a href="place_spec.php"><i class="fa fa-heart-o"></i>Add Place Specifications</a>
                            </li>
							<li><a href="booking_view.php"><i class="fa fa-heart-o"></i>View Booking Details</a>
                            </li>
                        </ul>
                    </aside>
                </div>
	
                <div class="col-md-9" style="overflow-x;">
                  <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Show only current trip</label>
                    </div>
	
                    <table class="table table-bordered table-striped table-booking-history">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Hotel name</th>
                                <th>Location</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Check-in</th>
								<th>Check-out</th>
                                <th>Room</th>
                                <th>Price</th>
                                <th>No.of Rooms</th>
								<th>No.of Adults</th>
								<th>No.of Childs</th>
								<th>Confirmation number</th>											
                            </tr>
                        </thead>
	
                        <tbody>
																		<?php
$con = mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($con,"mainp") or die(mysqli_error());
	
					$sql="select * from booking";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				?>
                                                          
                                <td><?php echo $row['book_id'];?></td>
                                <td><?php echo $row['hotel_name'];?></td>
                                <td><?php echo $row['place'];?></td>
                                <td><?php echo $row['fname'];?></td>
                                <td><?php echo $row['lname'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['cdate'];?></td>
								<td><?php echo $row['odate'];?></td>
                                <td><?php echo $row['room_type'];?></td>
                                <td><?php echo $row['price'];?></td>
                                <td><?php echo $row['rooms'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td>22368<?php echo $row['book_id'];?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
			
            </div>
        </div>



        <div class="gap"></div>
        <footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a class="logo" href="index.html">
                            <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                        </a>
                        <p class="mb20">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>
                        <ul class="list list-horizontal list-space">
                            <li>
                                <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Enter your E-mail Address</label>
                            <input type="text" class="form-control">
                            <p class="mt5"><small>*We Never Send Spam</small>
                            </p>
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <ul class="list list-footer">
                            <li><a href="#">About US</a>
                            </li>
                            <li><a href="#">Press Centre</a>
                            </li>
                            <li><a href="#">Best Price Guarantee</a>
                            </li>
                            <li><a href="#">Travel News</a>
                            </li>
                            <li><a href="#">Jobs</a>
                            </li>
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                            <li><a href="#">Feedback</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Have Questions?</h4>
                        <h4 class="text-color">+1-202-555-0173</h4>
                        <h4><a href="#" class="text-color">support@traveler.com</a></h4>
                        <p>24/7 Dedicated Customer Support</p>
                    </div>

                </div>
            </div>
        </footer>

        <script src="js/jjss/jquery.js"></script>
        <script src="js/jjss/bootstrap.js"></script>
        <script src="js/jjss/slimmenu.js"></script>
        <script src="js/jjss/bootstrap-datepicker.js"></script>
        <script src="js/jjss/bootstrap-timepicker.js"></script>
        <script src="js/jjss/nicescroll.js"></script>
        <script src="js/jjss/dropit.js"></script>
        <script src="js/jjss/ionrangeslider.js"></script>
        <script src="js/jjss/icheck.js"></script>
        <script src="js/jjss/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/jjss/typeahead.js"></script>
        <script src="js/jjss/card-payment.js"></script>
        <script src="js/jjss/magnific.js"></script>
        <script src="js/jjss/owl-carousel.js"></script>
        <script src="js/jjss/fitvids.js"></script>
        <script src="js/jjss/tweet.js"></script>
        <script src="js/jjss/countdown.js"></script>
        <script src="js/jjss/gridrotator.js"></script>
        <script src="js/jjss/custom.js"></script>
    </div>
</body>

</html>


