<?php
if (session_id() == null) {
session_start();
}
if(!isset($_SESSION['AUI'])){
header('location:Index.php');
}
function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
$current_page = PageName();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />


<!--Font awesome  --->

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
         
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
   Auction
        </a>

      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
              <li class="<?php echo $current_page == '123.php' ? 'active':NULL ?>">
                  <a href="./123.php">
                      <i class="now-ui-icons design_app"></i>
                      <p>Dashboard</p>
                  </a>
              </li>
             
        
            <li class="<?php echo $current_page == 'UserTable.php' ? 'active':NULL ?>">
            <a href="./UserTable.php">
              <i class="now-ui-icons  users_single-02"></i>
              <p>User</p>
            </a>
          </li>
<li class="<?php echo $current_page == 'ProductTable.php' ? 'active':NULL ?>">
           <a href="./ProductTable.php">
              <i class="now-ui-icons shopping_box"></i>
              <p>Product</p>
            </a>
          </li>

          <li class="<?php echo $current_page == 'BidTable.php' ? 'active':NULL ?>">
            <a href="./BidTable.php">
              <i class="now-ui-icons business_chart-bar-32"></i>
              <p>Bid</p>
            </a>
          </li>
          <li>
           
    
           
             
 <li class="<?php echo $current_page == 'AuctionTable.php' ? 'active':NULL ?>">
            <a href="./AuctionTable.php">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Auction</p>
            </a>
          </li>
          <li>
           
         
         
        </ul>
      </div>
    </div>

   
   
        <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Tables</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a  href="./AdminTable.php" class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                
                </div>
              </li>

            </ul>
          </div>
        </div>
      </nav>