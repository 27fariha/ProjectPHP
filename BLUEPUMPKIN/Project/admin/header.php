<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if($_SESSION["ROLE"]==null)
{
  header('LOCATION:login.php');
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title></title>

  <!-- Favicons -->
  <link href="img/fav.png" rel="icon">
  <link href="img/fav.png" rel="apple-touch-icon">

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
  <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
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
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
<li><a class="logout" href="view_employee_bday.php"> <i class="fa fa-birthday-cake"></i> Todays birthdays</a></li>

          <li><a class="logout" href="Logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
  <?php
  $ad = $_SESSION["ID"];
  ?>
 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="edit_employee.php?Idd=<?php echo $ad;?>"><img src=<?php echo $_SESSION['IMG']?> class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $_SESSION['NAME'];?></h5>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
           <?php 
             if($_SESSION["ROLE"]=="ADMIN") 
            echo "
          <li class=sub-menu>
            <a href=javascript:;>
              <i class='fa fa-users'></i>
            <span>Employee</span>
              </a>
            <ul class=sub>

              <li><a href=add_employee.php>Add Employee</a></li>

              <li><a href=view_employee.php>View Employee</a></li>
              
            </ul>
          </li>

 <li class=sub-menu>
            <a href=javascript:;>
              <i class='fa fa-tag'></i>
              <span>Category</span>
              </a>
            <ul class=sub>
              <li><a href=add_category.php>Add Category</a></li>
              <li><a href=view_category.php>View Category</a></li>
              
            </ul>
          </li>




          "  ;
          ?>
          
         
       
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Event</span>
              </a>
            <ul class="sub">
               <?php 
             if($_SESSION["ROLE"]=="ADMIN") 
            echo "
              <li><a href=add_event.php>Add Event</a></li>";
if($_SESSION["ROLE"]=="EMP") 
            echo "
<li><a href=add_participant.php>Register For an Event</a></li>";
              ?>
              <li><a href="view_event.php">View Event</a></li>
            
            </ul>
          </li>
             <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-user"></i>
              <span>Participant</span>
              </a>
            <ul class="sub">
                <?php 
             if($_SESSION["ROLE"]=="ADMIN") 
            echo "
              <li><a href=add_participant.php>Add Participant</a></li>";
              ?>
              <li><a href="view_participant.php">View Participant</a></li>
             
            </ul>
              </li>
             <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-trophy"></i>
              <span>Winners</span>
              </a>
            <ul class="sub">
              <?php  if($_SESSION["ROLE"]=="ADMIN") 
            echo "
              <li><a href=view_event_forWinner.php>Add Winners</a></li> "; ?>
              <li><a href=view_winners.php>View Winners</a></li>
             
            </ul>
          </li>
          <li><a href="contact_view.php"> <i class="fa fa-envelope"></i>Contact</a></li>



        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

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