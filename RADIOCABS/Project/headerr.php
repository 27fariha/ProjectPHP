<?php session_start();?>
<?php

function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$current_page = PageName();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Radio Cabs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="./index/fonts/icomoon/style.css">

    <link rel="stylesheet" href="./index/css/bootstrap.min.css">
    <link rel="stylesheet" href="./index/css/magnific-popup.css">
    <link rel="stylesheet" href="./index/css/jquery-ui.css">
    <link rel="stylesheet" href="./index/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./index/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="./index/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="./index/fonts/flaticon/font/flaticon.css">
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="./index/css/aos.css">

    <link rel="stylesheet" href="./index/css/style.css">
    
  </head>
  
  <?php 
  include('connect.php');
  
  $query="Select * from company where Membership='Premium' ";
  $res=mysqli_query($con,$query);
  ?>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0">Radio Cabs</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="<?php echo $current_page == 'index.php' ? 'active':NULL ?>"><a href="index.php">Home</a></li>
                <li class="<?php echo $current_page == 'aboutus.php' ? 'active':NULL ?>"><a href="aboutus.php">About Us</a></li>
                <li class="<?php echo $current_page == 'gallerycompany.php' ? 'active':NULL ?>">
                  <a href='gallerycompany.php'>Company</a>
                  
                </li>
             
                <li class="<?php echo $current_page == 'feedback.php' ? 'active':NULL ?>"><a href="feedback.php">Feedback</a></li>
  
               
 
 <?php
if($_SESSION['Company']!=null)
{
      echo "  <li class='<?php echo $current_page == listdriver2.php ? active:NULL ?>'><a href='listdriver2.php'>Drivers</a></li> ";
	  echo "               <li ><a href='logout2.php'>Logout</a></li>";
}
else{
echo "    <li class='<?php echo $current_page == loginuser.php ? active:NULL ?>'><a href='loginuser.php'>Login</a></li>";

echo " <li class='has-children'>
                  <a>register</a>
                  <ul class='dropdown'>
                    <li class='<?php echo $current_page == registercompany.php ? active:NULL ?>'><a href='registercompany.php'>Register as Company</a></li>
                    <li class='<?php echo $current_page == registerdriver.php ? active:NULL ?>'><a href='registerdriver.php'>Register as Driver</a></li>
                  </ul>
                </li>";
}
?>
                <!-- <li class="<?php echo $current_page == 'contact.html' ? 'active':NULL ?>"><a href="contact.html">Contact</a></li> -->
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    <div class="site-blocks-cover overlay" style="background-image: url(./index/images/i1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Worldwide Quick Services</h1>
            <p><a href="registercompany.php" class="btn btn-primary py-3 px-5 text-white">Register Company</a></p>
            <p><a href="registerdriver.php" class="btn btn-primary py-3 px-5 text-white">Register Driver</a></p>

          </div>
        </div>
      </div>
    </div>  
      
    </header>
    <script src="./index/js/jquery-3.3.1.min.js"></script>
  <script src="./index/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="./index/js/jquery-ui.js"></script>
  <script src="./index/js/popper.min.js"></script>
  <script src="./index/js/bootstrap.min.js"></script>
  <script src="./index/js/owl.carousel.min.js"></script>
  <script src="./index/js/jquery.stellar.min.js"></script>
  <script src="./index/js/jquery.countdown.min.js"></script>
  <script src="./index/js/jquery.magnific-popup.min.js"></script>
  <script src="./index/js/bootstrap-datepicker.min.js"></script>
  <script src="./index/js/aos.js"></script>

  <script src="./index/js/main.js"></script>
  </body>
</html>