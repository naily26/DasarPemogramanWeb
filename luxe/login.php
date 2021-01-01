<?php
error_reporting(0);
include "koneksi.php";


    $ktp = $_POST['ktp'];
    $email = $_POST['email'];
	$nama = $_POST['name'];
	$nohp = $_POST['hp'];
	$password_user = $_POST['password'];
	$username = $_POST['username'];

	$sql = "INSERT INTO costumers(ktp, email, nama, nohp, username, password_user) VALUES('$ktp','$email','$nama', '$nohp', '$username', '$password_user')";
	//$sq = mysql_query("INSERT INTO costumers(ktp, email, nama, nohp, password_user) VALUES('$ktp','$email','$nama', '$nohp', '$password_user'");
	
	if(mysqli_query($connect,$sql)){
		
	}
	
	mysqli_close($connect);

	
?>
<!DOCTYPE html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login -  Hotel Devin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/superfish.css">	
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">	
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style1.css">
	<script src="js/modernizr-2.6.2.min.js"></script>	
</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">HOTEL DEVIN</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="home1.html">Home</a></li>
							<li><a class="active" href="login.html">Login</a>								
							</li>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		
	</div>
	<!-- end:fh5co-header -->

	<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay">
		<div class="container">
			<div class="row">
                <div class="login" style="margin-top: 20px;">
				<form class="form1" method="POST" action="cek_login.php">
                    <div class="form-group">
                        <label for="user">Username:</label>
                        <input type="text" class="form-control" placeholder="Enter Username" name="user" id="user">
                      </div>
                      <div class="form-group">
                          <label for="password">Password:</label>
                          <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
                        </div>
                        <div>
                          <button><input type="submit" name="login" value="Log In"> </button>
                        </div>
                        <div><hr>
                        <button><a href="hotel.html">Daftar</a></button></div>
                </div>	
                </form>	
                	
			</div>	
			
		</div>
		</div>			
	</div>
	
	

	
	<footer id="footer" class="fh5co-bg-color" style="background-color: black;">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy;  2020<br> All Rights Reserved. <br>
						Designed by Naily and Shely </small></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						
						
						<div class="col-md-6">
							
							<p>Subscribe and follow us</p>
							
						</div>
						<div class="col-md-3">
							<ul class="social-icons">
								<li>
									<a href="#"><i class="icon-twitter-with-circle"></i></a><br>
									<a href="#"><i class="icon-facebook-with-circle"></i></a><br>
									<a href="#"><i class="icon-instagram-with-circle"></i></a><br>
									<a href="#"><i class="icon-linkedin-with-circle"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</footer>

</div>
<!-- END fh5co-page -->

</div>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="js/google_map.js"></script>

<script src="js/custom.js"></script>

</body>
</html>