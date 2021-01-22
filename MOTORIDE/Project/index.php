<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Moto Rider - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

   <div class="container">
     <a class="navbar-brand" href="index.php">MOTO<span>RIDER</span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>
<div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
         <li class="nav-item"><a href="car.php" class="nav-link">Cars</a></li>
         <li class="nav-item"><a href="reg_form.php" class="nav-link">Register</a></li>
         <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
         <li class="nav-item">
          <?php if ($_SESSION['ABC']!=null){ 
          echo "<a href='Logout.php' class='nav-link'>Logout</a>";} 
          else{ echo "<a href='Login.php' class='nav-link'>Login</a>";}?></li>
       </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->

 <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">

 </div>

 <section class="ftco-section ftco-no-pt bg-light">
   <div class="container">
    <div class="row no-gutters">

    </div>
  </section>


 

<section class="ftco-section ftco-about">
 <div class="container">
  <div class="row no-gutters">
   <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
   </div>
   <div class="col-md-6 wrap-about ftco-animate">
     <div class="heading-section heading-section-white pl-md-5">
      <span class="subheading">About us</span>
      <h2 class="mb-4">Welcome to MOTO-RIDER</h2>

      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
      <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
      <p><a href="car.php" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>
    </div>
  </div>
</div>
</div>
</section>

<section class="ftco-section">
 <div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-7 text-center heading-section ftco-animate">
     <span class="subheading">Services</span>
     <h2 class="mb-3">Our Services</h2>
   </div>
 </div>
 <div class="row">
   <div class="col-md-3">
    <div class="services services-2 w-100 text-center">
     <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
     <div class="text w-100">
      <h3 class="heading mb-2">Wedding Ceremony</h3>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    </div>
  </div>
</div>
<div class="col-md-3">
  <div class="services services-2 w-100 text-center">
   <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
   <div class="text w-100">
    <h3 class="heading mb-2">City Transfer</h3>
    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
  </div>
</div>
</div>
<div class="col-md-3">
  <div class="services services-2 w-100 text-center">
   <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
   <div class="text w-100">
    <h3 class="heading mb-2">Airport Transfer</h3>
    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
  </div>
</div>
</div>
<div class="col-md-3">
  <div class="services services-2 w-100 text-center">
   <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
   <div class="text w-100">
    <h3 class="heading mb-2">Whole City Tour</h3>
    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
  </div>
</div>
</div>
</div>
</div>
</section>




<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2"><a href="#" class="logo">MOTO<span>RIDER</span></a></h2>
          <p>Motoride is a transport-based user-friendly service, that which an average person can easily use. The goal is to make a web-based project in which the user can rent out a car of thier choice and also place thier car for rent and can sell thier car as well.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
   
      <div class="col-md">
       <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Quick Links</h2>
        <ul class="list-unstyled">
          <li><a href="index.php" class="py-2 d-block">Home</a></li>
          <li><a href="about.php" class="py-2 d-block">About</a></li>
          <li><a href="car.php" class="py-2 d-block">Cars</a></li>
          <li><a href="reg_form.php" class="py-2 d-block">Register</a></li>
          <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
           <li><a href="Login.php" class="py-2 d-block">Login</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon icon-map-marker"></span><span class="text">Aptech North Nazimabad Campus, Karachi, Pakistan.</span></li>
           <li><a href="#"><span class="icon icon-phone"></span><span class="text">+92 123 456 789</span></a></li>
           <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yoursite.com</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>