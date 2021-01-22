<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php session_start();
if(!isset($_SESSION['user2']))
{$_SESSION['user2']=null;}
	?>


<?php
include ('connect.php');
$qu="SELECT * FROM admin";
$res=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($res);
?>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cake Maker</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linearicons/style.css" rel="stylesheet">
        <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/nice-select/css/nice-select.css" rel="stylesheet">
        <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Main Header Area =================-->
		<header class="main_header_three">
			<div class="top_logo_header">
				<div class="container">
					<div class="header_logo_inner">
						<div class="h_left_text">
							<div class="media">
								<div class="d-flex">
									<i class="flaticon-auricular-phone-symbol-in-a-circle"></i>
								</div>
								<div class="media-body">
								<a href="https://accounts.google.com/"><?php echo $data['Email'] ?></a></span>
									
								</div>
							</div>
						</div>
						<div class="h_middle_text">
							<a href="index.php"><img src="cake.png" alt="" height=150></a>
						</div>
						<div class="h_right_text">

						<?php if($_SESSION['user2']==null){?>
							<a class="pink_btn" href="login.php"><b>Login</b></a>

						<?php } else {?>
							<a class="" href="logout.php"><b><i class="fa fa-sign-out" style="font-size:50px; color:pink"></i></b></a>
							&nbsp; &nbsp;
						<a class="" href="profile.php"><b><i class="fa fa-user-circle" style="font-size:50px; color:pink"></i></b></a>
						
						
						<?php }?>
							
						</div>
					</div>
				</div>
			</div>
			<div class="middle_menu_three">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.php"><img src="img/logo-2.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="dropdown submenu active">
									
                                    
								<li><a href="index.php">Home</a></li>

								<li><a href="cake.php">Our Cakes</a></li>
									
								<li><a href="about-us.php">About Us</a></li>
									
								</li>
								
								<li><a href="contact.php">Contact Us</a></li>
								
								
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
        <!--================End Main Header Area =================-->
        
        <!--================Slider Area =================-->
        <section class="main_slider_area">
           
        <!--================End Slider Area =================-->