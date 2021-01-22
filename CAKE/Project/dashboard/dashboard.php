<?php session_start();?>
<?php
if ($_SESSION['admin']==null) {
    header('location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>DashBoard - The Cake Maker</title>

    <!-- Favicons -->
    <link href="./assetsdashboard/img/favicon.png" rel="icon">
    <link href="./assetsdashboard/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="./assetsdashboard/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="./assetsdashboard/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="./assetsdashboard/css/style.css" rel="stylesheet">
    <link href="./assetsdashboard/css/style-responsive.css" rel="stylesheet">

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
      ======================================================= -->
  </head>
  <body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="../index.php" class="logo"><b style="color:#f299be"> CAKE <span style="color:#cf298c"> SHOP </span></b></a>

        <!--logo end-->

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="signout.php" style="background-color:#f299be;">Logout</a></li>
            </ul>
            <ul class="nav pull-right top-menu">

            </ul>
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered">
          
          <?php echo "<a href='adminedit.php?idd=".$_SESSION['admin2']."'/>";?> 
        
          <img src="<?php echo $_SESSION['admin1'];?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $_SESSION['admin'];?></h5>
          <ul class="mt">
          </ul>
 

        <li class="sub-menu"style="color:white">
            <a href="javascript:;">
                <i class="fa fa-list-alt" ></i>
                    <span style="color:white"><b>Catagory</b></span>
                </a>
                <ul class="sub">

                    <li style="color:white"><b><a href="catagory.php">Add Catagory</a></b></li>
                    <li style="color:white"><b><a href="catagoryread.php">view Catagory</a></b></li>

                </ul>
            </li>
            <li class="sub-menu" style="color:white">
                <a href="/Dashboard/DEmployee">
                    <i class="fa fa-user-md"></i>
                    <span style="color:white"><b>Event</b></span>
                </a>
                <ul class="sub">
                    <li style="color:white"><b><a href="eventread.php">View Event</a></b></li>
                    <li style="color:white"><b><a href="event.php">Add Event</a></b></li>

                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span style="color:white"><b>Product</b></span>
                </a>

                <ul class="sub">
                    <li style="color:white"><b><a href="productread.php">View Product</a></b></li>
                    <li style="color:white"><b><a href="product.php">Add Product</a></b></li>

                </ul>

            </li>
            <li class="sub-menu" style="color:white">
                <a href="javascript:;">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span style="color:white"><b>Order</b></span>
                </a>
                <ul class="sub">
                    <li style="color:white"><b><a href="orderread.php">View Order</a></b></li>
                   

                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                    <span style="color:white"><b>Recipes</b></span>
                </a>
                <ul class="sub">
                    <li style="color:white"><b><a href="reciperead.php">View Recipe</a></b></li>
                    <li  style="color:white"><b><a href="recipe.php">Add Recipe</a></b></li>

                </ul>
            </li>



            <li class="sub-menu"style="color:white">
            <a href="javascript:;">
                <i class="fa fa-address-book"></i>
                <span style="color:white"><b>Contact</b></span>
            </a>
            <ul class="sub">
                <li style="color:white"><b><a href="contactread.php">View  Messages</a></b></li>
            

            </ul>
        </li>











        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<section id="main-content">
    <section class="wrapper">

    </section>
</section>



</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="./assetsdashboard/lib/jquery/jquery.min.js"></script>
<script src="./assetsdashboard/lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="./assetsdashboard/lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="./assetsdashboard/lib/jquery.scrollTo.min.js"></script>
<script src="./assetsdashboard/lib/jquery.nicescroll.js" type="text/javascript"></script>
<!--common script for all pages-->
<script src="./assetsdashboard/lib/common-scripts.js"></script>
    <!--script for this page-->