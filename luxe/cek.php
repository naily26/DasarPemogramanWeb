<!DOCTYPE html>
<html lang="en">
<head>
  <title>List of Transaction - Hotel Devin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


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
					<h1 id="fh5co-logo"><a href="index.html">Hotel Devin</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="index.html">Home</a></li>
							<li><a class="active" href="cek.php">Booking</a>								
							</li>
							<li><a href="services.html">facilities</a></li>
							<li><a href="blog.html">Gallery</a></li>
							<li><a href="testimonials.html">Testimonials</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		
	</div>
	<!-- end:fh5co-header -->

	<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">List of Transaction</h1>
						<p>Anda bisa lihat daftar booking di bawah ini!</p>
					</div>					
				</div>				
			</div>		
		</div>
		</div>			
	</div>
	
	<div class="container">
		<div class="row">
			<div>
				<?php
				include "koneksi.php";

				$query_1 = "SELECT * FROM transaksi";
				$value = mysqli_query($connect,$query_1);?>
				
				<div>
				<table class="table table-active table-hover">
					<br>
					<button type="button"><a href="booking1.html">Add booking</button>
					
						

      <tr>
        <td>Id Transaksi</td>
        <td>Id Kamar</td>
        <td>No. KTP</td>
        <td>Check In</td>
        <td>Check Out</td>
        <td>Jumlah Hari</td>
        <td>Total Pembayaran</td>
        <td>Opsi</td>
      </tr>
    </thead>
    <tbody>
      <tr>
				<?php
				while ($data = mysqli_fetch_array($value)) {
					?>
					<tr>
					<td><?php echo $data['idtransaksi'];?></td> 
					<td><?php echo $data['idkamar'];?></td>
					<td><?php echo $data['ktp'];?></td>
					<td><?php echo $data['checkin'];?></td>
					<td><?php echo $data['checkout'];?></td>
					<td><?php echo $data['jumlah'];?></td>
					<td><?php echo $data['biaya'];?></td>
					<td><button><a href="edit.php?id=<?php echo $data['idtransaksi']; ?>"> Edit </a></button>
						 <button><a href="delete.php?id=<?php echo $data['idtransaksi']; ?>"> Hapus </a></button></td></tr>
					<?php
				}
				?>
				</table>
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