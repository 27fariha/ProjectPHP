<?php
session_start();
if(!ISSET($_SESSION['AUN'])){
  $_SESSION['AUN']=NULL;
}
function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
$current_page = PageName();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Auction</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">

  <script src="email-validation.js"></script>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar py-4 site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php" class="d-block">
              <img src="images/logo.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="<?php echo $current_page == 'index.php' ? 'active':NULL ?>">
                  <a href="index.php" class="nav-link text-left">Home</a>
                </li>
                <li class="<?php echo $current_page == 'about.php' ? 'active':NULL ?>">
                  <a href="about.php" class="nav-link text-left">About</a>
                </li>
                <li class="<?php echo $current_page == 'buy.php' ? 'active':NULL ?>">
                  <a href="buy.php" class="nav-link text-left">Buy</a>
                </li>
                <li class="<?php echo $current_page == 'sell.php' ? 'active':NULL ?>">
                  <a href="sell.php" class="nav-link text-left">Sell</a>
                </li>
                
                <li class="<?php echo $current_page == 'services.php' ? 'active':NULL ?>">
                  <a href="services.php" class="nav-link text-left">Services</a>
                 
                </li>
                
               
                
                <li class="<?php echo $current_page == 'contact.php' ? 'active':NULL ?>">
                  <a href="contact.php" class="nav-link text-left">Contact</a>
                </li>
              </ul>                                                                
            </nav>

          </div>
          <div class="ml-auto">

            <div class="social-wrap" >
            <?php if($_SESSION['AUN']==null) { ?>
              <a href="login.php" class="text-white" >Sign In</a>
              <a href="register.php" class="text-white "> / Register</a>
            <?php } else { ?>
              <a href="profile.php" class="text-white">Profile</a>
              <a href="logout.php" class="text-white"> / LogOut</a>

            <?php } ?>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3 text-white" style="position: relative; top: 7px;"></span></a>
              </div>
            </div>

          </div>
        </div>

      </header>