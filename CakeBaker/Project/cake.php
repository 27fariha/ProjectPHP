<?php
include ('connect.php');

include ('header.php');
if(isset($_GET['eid'])){
	$x=$_GET['eid'];
	
	$qu="SELECT * FROM product_details where event_id_f='$x'";
	
}
else{
	$qu="SELECT * FROM product_details";
}


$qu1="SELECT * FROM events";
$res=mysqli_query($con,$qu);
$res1=mysqli_query($con,$qu1);
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
<style>

<style>
.container {
  position: relative;
  text-align: center;
  color: white;
}

.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}
</style>
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
        			<h3>Cakes</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="cake.php">cake</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Product Area =================-->
        <section class="product_area p_100">
        	<div class="container">
        		<div class="row product_inner_row">
        			<div class="col-lg-9">
        				
        				<div class="row product_item_inner">
						<?php
						while($data=mysqli_fetch_assoc($res)){
							$v=$data['Type'];

						?>
        					<div class="col-lg-4 col-md-4 col-6">
        						<div class="cake_feature_item">
									<div class="cake_img">
										<img src="dashboard/pages/<?php echo $data['Image']?>" alt="" height='150'>
										<?php if($v=="Eggless") { ?>
										<div class="top-left"><img src="egg.jpg" width=40></div>
										<?php } ?>
									</div>
									<div class="cake_text">
										<h4><?php echo $data['Price'] ?></h4>
										<h3><?php echo $data['Product_name'] ?></h3>
<?php if(!isset($_SESSION['user2'])){ ?>
<a class="pest_btn" href="login.php">Add to Cart</a>
<?php } else { ?>
<a class="pest_btn" href="cartAction.php?action=addToCart&id=<?php echo $data['Id']; ?>">Add to Cart</a>
<?php } ?>

									</div>
								</div>
        					</div>
						<?php } ?>

        				</div>
        				
        			</div>
        			<div class="col-lg-3">
        				<div class="product_left_sidebar">
        					
        					<aside class="left_sidebar p_catgories_widget">
        						<div class="p_w_title">
        							<h3>Events</h3>
									
        						</div>
        						<ul class="list_style">
								<?php
						while($data1=mysqli_fetch_assoc($res1)){
						?>
									<li><a href="cake.php?eid=<?php echo $data1['id']?>"><?php echo $data1['Event_Name']?></a></li>
									<?php  }
									?>

        							
        						</ul>
        					</aside>
        					
        						
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Product Area =================-->
        
        

        <?php include("footer.php"); ?>