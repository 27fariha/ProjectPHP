<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>DashBoard - SRC Traveling Agency</title>

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
        <!--logo start-->
        <a href="" class="logo"><b style="color:#f299be"> CAKE <span style="color:#cf298c"> RESERVATION </span></b></a>

        <!--logo end-->

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
            </ul>
        </div>
    </header>
    <!--header end-->
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

  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="login.php" method="POST">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input pattern="^[A-Za-z]+\s?[A-Za-z]+" name="na" type="text" class="form-control" placeholder="User Name" autofocus>
          <br>
          <input  pattern="^[A-Za-z]+\s?[A-Za-z]+" name="ps" type="password" class="form-control" placeholder="Password">
          
        
          <button class="btn btn-theme btn-block" name="btn" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          
          
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
             
             
              
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>