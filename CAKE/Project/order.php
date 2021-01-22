<?php session_start()?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Bakery Point</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
<?php
$today = date("y-m-d"); 
$pr=$_GET['pr'];
include('header.php')
?>
    
       
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Order</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="order.php">Order</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
								 <!--================Book Table Area =================-->
        <section class="book_table_area p_120">
        	<div class="container">
        		<div class="book_table_inner row">
        			<div class="col-lg-5">
        				<div class="table_img">
        					<img src="img/book-table.jpg" alt="">
        				</div>
        			</div>
        			<div class="col-lg-7">
        				<div class="table_form">
        					<h3>Book a Cake</h3>
        					<p>Cakes are special. Every birthday, every celebration ends with something sweet, a cake, and people remember.<br> It's all about the memories..</p>
        					<form class="book_table_form row" action="" method="POST">
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
								</div>
								
								<div class="form-group col-md-12">
									<input type="text"  class="form-control" id="subject" name="phone" placeholder="Phone Number">
								</div>
                                                                          
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="subject" name="address" placeholder="Delivery Address">
                                </div>
                                                              
                                                                            <div class="form-group col-md-12">
									<input type="date" min="20<?php echo $today;?>"class="form-control" id="subject" name="date" placeholder="Delivery Date & time">
								</div>
                                <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="subject" name="price" placeholder="Total Price" value="<?php echo $pr ?>">
								</div>

								</div>
								<div class="form-group col-md-12">
									<button type="submit" name="btn" value="submit" class="btn submit_btn form-control">Book it</button>
								</div>
							</form>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Book Table Area =================-->
							
        
      <?php
include('footer.php')
?>
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/scroll/jquery.mCustomScrollbar.js"></script>
        <script src="vendors/swiper/js/swiper.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>


<?php
include('connect.php');
if(isset($_POST["btn"]))
{
    session_destroy();
    $n=$_POST["name"];
    $e=$_POST["phone"];
    $s=$_POST["address"];
    $m=$_POST["date"];
    $p=$_POST["price"];

    $q="INSERT INTO orderr(Name,Contact,Delivery_address,Delivery_date,Total_Price) VALUES('$n','$e','$s','$m','$p')";
    $fd=mysqli_query($con,$q);
    if($fd){
        echo "<script> alert('Thank you for booking you will get your order soon!'); window.location.href='index.php'</script>";
    }
    else{
        echo "<script> alert('insertion failed');</script>";
    }
}

?>