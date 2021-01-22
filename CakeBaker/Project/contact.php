
<!DOCTYPE html>
<html lang="en">
	<?php
	include ('header.php');
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
        <title>The Cake</title>

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

        <!--================End Main Header Area =================-->

		<section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Contact Us</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="contact.php">Contact</a></li>
        			</ul>
        		</div>
        	</div>
        </section>

 <!--================Contact Form Area =================-->
 <section class="contact_form_area p_100">
        	<div class="container">
        		<div class="main_title">
					<h2>Get In Touch</h2>
					<h5>Do you have anything in your mind to let us know?  Kindly don't delay to connect to us by means of our contact form.</h5>
				</div>
       			<div class="row">
       				<div class="col-lg-7">
       					<form class="row contact_us_form" action="Contactinsert.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
							</div>
							<div class="form-group col-md-6">
								<input type="email" pattern="@^[A-Za-z0-9-_]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,4})$" class="form-control" id="email" name="email" placeholder="Email address" required>
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
							</div>
							<div class="form-group col-md-12">
								<textarea  type="text" class="form-control" name="message" id="message" rows="1" placeholder="Wrtie message" required></textarea>
							</div>
							<div class="form-group col-md-12">
								<button type="submit" value="submit" name="btn" class="btn order_s_btn form-control">submit now</button>
							</div>
						</form>
       				</div>
       				<div class="col-lg-4 offset-md-1">
       					<div class="contact_details">
       						<div class="contact_d_item">
								   <h3>Address :</h3>
								   
								   
       							<p> <?php echo $data['Address'] ?> <br /> <?php echo $data['Address_Detail'] ?></p>
       						</div>
       						<div class="contact_d_item">
       							<h5>Phone : <a href="tel:<?php echo $data['Phone'] ?>"> <?php echo $data['Phone'] ?></a></h5>
       							<h5>Email : <a href="mailto:rockybd1995@gmail.com"><?php echo $data['Email'] ?></a></h5>
       						</div>
       						<div class="contact_d_item">
       							<h3>Opening Hours :</h3>
       							<p>8:00 AM – 10:00 PM</p>
       							<p>Monday – Sunday</p>
       						</div>
       					</div>
       				</div>
       			</div>
        	</div>
        </section>
        <!--================End Contact Form Area =================-->
        
       
        
        <?php
        include("footer.php");         
        ?>