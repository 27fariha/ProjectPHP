



<?php session_start();?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title></title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<body>
  <header class="header black-bg">
      
        
      </div>
      <!--logo start-->
      <a href="../home.php" class="logo"><b>Blue<span>Pumpkin</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
           
          
          </li>
          
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
     
    </header>
    <!--header end-->
  

    </div>
    <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
  //  $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <div id="login-page">
        <div class="container">
          <form class="form-login" action="" method="POST">
            <h2 class="form-login-heading">sign in now!</h2>
            <div class="login-wrap">
              <input type="text" class="form-control" placeholder="User Name" name="user"autofocus required>
              <br>
              <input type="password" class="form-control" name="password"placeholder="Password" required>
              <label class="checkbox">
           
                <span class="pull-right">
             
                </span>
              </label>
              <button class="btn btn-theme btn-block" type="submit" name="sub"><i class="fa fa-lock"></i> SIGN IN</button>
              <hr>
             
                </a>
              </div>
            </div>
            <!-- Modal -->
           
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
    <?php
    include('connect.php');
    if(isset($_POST["sub"]))
    {

      $U=$_POST["user"];
      $P=$_POST["password"];
      $query="select * from employee_register1 where username='$U' && password='$P'";
      $run=mysqli_query($con,$query);
      $data =mysqli_fetch_assoc($run);
      $role= $data['role'];
      if($role== '1')
      {
        $_SESSION["ROLE"]="ADMIN";
        $_SESSION["ID"]=$data['id'];
        $_SESSION["NAME"]=$data['Name'];
        $_SESSION["IMG"]=$data['image'];
             echo "<script> alert('Welcome ".$_SESSION["NAME"]."'); window.location.href='index.php';</script>"; 
      }
      else if($role== '2')
      {
        $_SESSION["ROLE"]="EMP";
      $_SESSION["ID"]=$data['id'];
        $_SESSION["NAME"]=$data['Name'];
        $_SESSION["IMG"]=$data['image'];
             echo "<script> alert('Welcome ".$_SESSION["NAME"]."'); window.location.href='index.php';</script>"; 
      }
      
      else
      {
        echo "<script> alert('failed');</script>";
      }
    }
    ?>