<!DOCTYPE html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home - NS Hotel</title>
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
                        <li><a class="active" href="index.html">Home</a></li>
                        <li><a href="cek.php">Booking</a>								
                        </li>
                        <li><a href="services.html">facilities</a></li>
                        <li><a  href="blog.html">Gallery</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
</div>
<!-- end:fh5co-header -->
<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
           <li style="background-image: url(images/slider1.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="col-md-12 col-md-offset-0 text-center slider-text">
                       <div class="slider-text-inner js-fullheight">
                           <div class="desc">
                               <p><span>HOTEL DEVIN</span></p>
                               <h2>Reserve Room for Family Vacation</h2>
                               <p>
                                   <a href="cek.php" class="btn btn-primary btn-lg">List of Transaction</a>
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(images/image-4.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="col-md-12 col-md-offset-0 text-center slider-text">
                       <div class="slider-text-inner js-fullheight">
                           <div class="desc">
                               <p><span>NS Hotel</span></p>
                               <h2>Make Your Vacation Comfortable</h2>
                               <p>
                               <a href="cek.php" class="btn btn-primary btn-lg">List of Transaction</a>
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(images/img_4.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="col-md-12 col-md-offset-0 text-center slider-text">
                       <div class="slider-text-inner js-fullheight">
                           <div class="desc">
                               <p><span>HOTEL DEVIN</span></p>
                               <h2>A Best Place To Enjoy Your Life</h2>
                               <p>
                               <a href="cek.php" class="btn btn-primary btn-lg">List of Transaction</a>
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
           
          </ul>
      </div>
</aside>

<?php

include 'koneksi.php';

 
$user = $_POST['user'];
$password_user = $_POST['password'];
 
$query = "SELECT * from costumers where username='$user' and password_user='$password_user'";
$result = mysqli_query($connect,$query);
$cek = mysqli_num_rows($result);

if ($cek>'0'){
    ?>
<div class="wrap">
    <div class="container">
        <div class="row">
            <div id="availability">
                
            </div>
        </div>
    </div>
</div>


<div id="featured-hotel" class="fh5co-bg-color">
    <div class="container">
        <div class="row">
            <div class="feature-full-1col">
                <div class="image" style="background-image: url(images/slider1.jpg);">
                    
                </div>
                <div class="desc">
                    <h3>HOTEL DEVIN</h3>
                    <p>HOTEL DEVIN berlokasi di kota Malang. Hotel ini menawarkan penginapan yang modern dengan Fasilitas berupa kolam renang atap outdoor, restaurant, spa dan fasilitas rapat/pertemuan. 
                        Kamar-kamar di NS hotel menonjolkan desain yang modern dan bersih. Dijamin pengunjung akan merasa nyaman dan puas. </p>
                </div>					
            </div>
            <div class="feature-full-1col">
                <div class="desc">
                    <h3>Our Address</h3>
                    <p>Lokasi sangat strategis dekat pusat kota. Pemandangan alam sekitar sangat indah. </p>
                    <ul class="contact-info">
                        <li><i class="ti-map"></i>Jalan Bendungan Sigura-gura Barat No. 6, Malang 65145</li>
                        <li><i class="ti-mobile"></i>(0341) 775633</li>
                        <li><i class="ti-envelope"></i><a href="#">infoNShotel@gmail.com</a></li>
                        <li><i class="ti-home"></i><a href="#">www.NShotel.com</a></li>
                    </ul>
                </div>
                <div class="image" style="background-image: url(images/image-1.jpg);">						
                </div>
            </div>
        </div>
                    
    </div>
</div>

<div id="fh5co-hotel-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="hotel-content">
                    <div class="hotel-grid" style="background-image: url(images/image-4.jpg);">
                        <a class="book-now text-center" href="booking1.html"><i class="ti-calendar"></i> Book Now</a>
                    </div>
                    <div class="desc">
                        <h3><a href="booking1.html">Standrad Room</a></h3>
                        <p>Luas kamar 16 m²<br><br>
                            
                            Fasilitas kamar: ​
                            AC,
                            Brankas,
                            Meja kerja,
                            Area tempat duduk,
                            Telepon,
                            TV layar datar,
                            TV kabel, 
                            Layanan bangun tidur, dan 1 kasur tipe king.
                        </p>
                        <p>Rp. 800000/day</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hotel-content">
                    <div class="hotel-grid" style="background-image: url(images/image-2.jpg);">
                        <a class="book-now text-center" href="booking1.html"><i class="ti-calendar"></i> Book Now</a>
                    </div>
                    <div class="desc">
                        <h3><a href="booking1.html">Deluxe Room</a></h3>
                        <p>Luas kamar 30 m²<br><br>
                            Fasilitas kamar: ​
                            Seprai,
                            Lemari,
                            AC,
                            Brankas,
                            Ketel listrik,
                            Sofa,
                            Meja kerja,
                            Area tempat duduk,
                            Telepon,
                            TV layar datar,
                            TV kabel,
                            Layanan bangun tidur dan 1 kasur king</p>
                            <p>Rp 950000/day</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hotel-content">
                    <div class="hotel-grid" style="background-image: url(images/image-1.jpg);">
                        <a class="book-now text-center" href="booking1.html"><i class="ti-calendar"></i> Book Now</a>
                    </div>
                    <div class="desc">
                        <h3><a href="booking1.html">Suite Room</a></h3>
                        <p> Luas kamar 40 m²<br><br>
                            Fasilitas kamar: ​
                            Seprai,
                            Lemari,
                            AC,
                            Brankas,
                            Ketel listrik,
                            Sofa,
                            Meja kerja,
                            Area tempat duduk,
                            Telepon,
                            TV layar datar,
                            TV kabel, dapur, 
                            Layanan bangun tidur dan 2 kasur king</p>
                            <p>Rp. 1100000/day</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }  
else {
    echo "<script>alert('Login anda tidak berhasil, silahkan login kembali!');window.location='login.php'</script>";
}?>


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
                                <a href="#"><i class="icon-twitter-with-circle" ></i></a> <br>
                                <a href="#"><i class="icon-facebook-with-circle"></i></a> <br>
                                <a href="#"><i class="icon-instagram-with-circle"></i></a> <br>
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
<script src="js/custom.js"></script>

</body>
</html>
