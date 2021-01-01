
<!DOCTYPE html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Booking - Hotel Devin,</title>
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
                <h1 id="fh5co-logo"><a href="index.html">Hotel Devin</a></h1>
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a class="active" href="hotel.html">Booking</a>								
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
                    <h1 class="text-center">Transaction Form</h1>
                    <p></p>
                </div>					
            </div>				
        </div>		
    </div>
    </div>			
</div>
<?php
            include "koneksi.php";
            error_reporting(0);
        
            $idkamar = $_POST['idkamar'];
            $checkin = $_POST['date-start'];
			$jumlah = $_POST['jumlah'];
            $ktp = $_POST['ktp'];
            $newDate = date("Y-m-d", strtotime($checkin));
            
            $numb = 0;
            $newDate1 = $newDate;
            $frew=0;
            while($numb<$jumlah){
                $sql = "SELECT id_auth FROM auth_room WHERE tanggal='$newDate' and idkamar='$idkamar'";
                mysqli_query($connect, $sql);
                $rslt = mysqli_query($connect, $sql);
                $rom = mysqli_num_rows($rslt);
                if($rom>0){
                    $frew++;
                }
                $numb++;
            }
            
                if($frew<1){
                    
                        $sql_hrg = "SELECT harga FROM kamar WHERE idkamar='$idkamar'";
                        $hrg = mysqli_query($connect,$sql_hrg);
                        $row = mysqli_fetch_array($hrg);
                        $total = $row[0] * $jumlah;
                        
                        $no = 0;
                           $checkout = $newDate;
                            while ($no <$jumlah){
                              $checkout++;
                              $no++;
                            }
                        
                        $sql_1= "INSERT INTO transaksi(ktp, checkin, jumlah, idkamar,biaya,checkout) VALUES ('$ktp','$newDate','$jumlah','$idkamar','$total','$checkout')";
                        
                        if(mysqli_query($connect,$sql_1)){
                           $no = 0;
                           $newDate2 = $newDate;
                            while ($no <$jumlah){
                              $sql_2 = "INSERT INTO auth_room(idkamar, tanggal) VALUES('$idkamar','$newDate2')";
                              mysqli_query($connect,$sql_2);
                              $newDate2++;
                              
                              $no++;
                            }
                            
                            ?>
                            <div class="container">
                            <div class="row">
                            <div >
                            Kamar anda tersedia dan transaksi berhasil, dengan deskripsi : <br>
                            <table class="table table-active table-hover">
                             
                        <tr>
                            <td>No KTP </td><td><?php echo $ktp ?></td>
                        </tr>
                        <tr>
                            <td>Kode Kamar </td><td><?php echo $idkamar ?> </td>
                        </tr>
                        <tr>
                            <td>Check In </td><td><?php echo $newDate ?> </td>
                        </tr>
                        <tr>
                            <td>Check Out </td><td><?php echo $checkout ?> </td>
                        </tr>
                        <tr>
                            <td>Jumlah Hari </td><td><?php echo $jumlah ?> </td>
                        </tr>
                        <tr>
                            <td>Harga per hari </td><td><?php echo $row[0] ?> </td>
                        </tr>
                        <tr>
                            <td>Total Pembayaran </td><td><?php echo $total ?> </td>
                        </tr>
                        </table>
                        <div><button><a href="cek.php">List of Transaction</a></button></div>
                            </div>
                            </div>
                        </div><?php
                        } 
                }
               
             
                else{
                    echo "<script>alert('Kamar yang anda pilih tidak tersedia! Silahkan memilih kamar lainnya');window.location='booking1.html'</script>";
                }    
                mysqli_close($connect);
?>	
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