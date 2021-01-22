<?php

include ('connect.php');
$query="Select * from event";
$res=mysqli_query($con,$query);
?>
<?php
function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
$current_page = PageName();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Bakery Point</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>


    <header class="header_area">
        <div class="main_menu">
           <nav class="navbar navbar-expand-lg navbar-light">
               <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <a class="navbar-brand logo_h" href="index.php"><img src="img/logo-2.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <!-- Collect the nav links, forms, and other content for toggling -->
                 <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                     <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item <?php echo $current_page == 'index.php' ? 'active':NULL ?>"><a class="nav-link" href="index.php">Home</a></li> 
                        <li class="nav-item <?php echo $current_page == 'about.php' ? 'active':NULL ?>"><a class="nav-link" href="about.php">About</a></li> 




                        <li class="nav-item submenu dropdown">
                           <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Our Products</a>
                           <ul class="dropdown-menu">
                              <?php

                              while($data=mysqli_fetch_assoc($res))
                              {
                                echo '<li class=nav-item><a href="birthdayevent.php?eid='.$data['Id'].'" class=nav-link>'.$data['type'].'</a></li>';
                            }
                            ?>
                        </ul>
                    </li> 

                    <li class="nav-item <?php echo $current_page == 'contact.php' ? 'active':NULL ?>"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item "<?php echo $current_page == 'recipe.php' ? 'active':NULL ?>"><a class="nav-link" href="recipe.php">Recipes</a></li>
			

                </ul>
            </div> 
        </div>
    </nav>
</div>
</header>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope-min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.js"></script>
<script src="js/mail-script.js"></script>
<script src="vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/scroll/jquery.mCustomScrollbar.js"></script>
<script src="vendors/swiper/js/swiper.min.js"></script>
<script src="js/theme.js"></script>
</body>
</html>