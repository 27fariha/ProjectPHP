

<!DOCTYPE html>
<html lang="en">

	<?php
	include ('header.php');
include ('connect.php');
$qu="SELECT * FROM admin";
$res=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($res);
$id=$_SESSION['user2'];
$qu1="SELECT * FROM customer_details where Id='$id'";
$res1=mysqli_query($con,$qu1);
$data1=mysqli_fetch_assoc($res1);
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
        			<h3>Profile</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="profile.php">Profile</a></li>
        			</ul>
        		</div>
        	</div>
        </section>





 <!--================Contact Form Area =================-->
 <section class="contact_form_area p_100">
        	<div class="container">
        		<div class="main_title">
					<h2>Sign up</h2>
					<h5>Please fill in this form to get sign up</h5>
				</div>
       			<div class="row">
       				<div class="col-lg-12">
       					<form class="row contact_us_form" action="" method="post" id="contactForm" novalidate="novalidate">
							<div class="form-group col-md-6">
								<input type="text" class="form-control" value="<?php echo  $data1['Name'] ?>" id="name" name="name" placeholder="Your name">
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="form-control" value="<?php echo  $data1['Email'] ?>" id="email" name="email" placeholder="Email address">
							</div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" value="<?php echo  $data1['password'] ?>" id="password" name="password" placeholder="Enter password">
							</div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" value="<?php echo  $data1['Contact'] ?>" id="contact" name="contact" placeholder="Contact">
							</div>
							
							<div class="form-group col-md-12">
								<button type="submit" value="submit" name="btn" class="btn order_s_btn form-control">Sign up now</button>
							</div>
						</form>
       				</div>
       				
       			</div>
        	</div>
        </section>
        <!--================End Contact Form Area =================-->
        
        


        <?php
        
        
        include("footer.php");

        ?>

<?php
include('footer.php');
?>
    <?php
if(isset($_POST['btn'])){
$a=$_POST["name"];
$b=$_POST["email"];
$c=$_POST["password"];
$d=$_POST["contact"];



$q="update customer_details set Name ='$a', password ='$c', Email='$b', Contact='$d'  where Id='$id'";
$res=mysqli_query($con,$q);
if($res){
echo "<script> alert('Done Editing'); window.location.href='index.php';</script>";
}
else
{
echo "<script> alert('error'); </script>";
}
}

?>

