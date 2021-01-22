<?php
session_start();
?>
<?php
include ('connect.php');
$query="Select * from event";
$res=mysqli_query($con,$query);
?>
<!DOCTYPE html>
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
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
        <link rel="stylesheet" href="vendors/scroll/jquery.mCustomScrollbar.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        

        
        <!--================Header Menu Area =================-->
     
<?php
include('header.php');
?>
     
        <!--================Header Menu Area =================-->
        
        <!--================Canvus Menu Area =================-->
   
        <!--================End Canvus Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_slider">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img src="img/slider/ss.jpg" alt="" height="900" width="1920" >
						<div class="slider_text">
							<img src="img/slider/vv.png" alt="" height="385" width="555">
						</div>
					</div>
					<div class="swiper-slide"><img src="img/slider/b.png" alt="" height="900" width="1920"   >
						<div class="slider_text">
							<img src="img/slider/vv.png" alt="" height="385" width="555">
						</div>
					</div>
					<div class="swiper-slide"><img src="img/slider/c.jpg " alt="" height="900" width="1920">
						<div class="slider_text">
							<img src="img/slider/vv.png" alt="" height="385" width="555">
						</div>
					</div>
				</div>
			</div>

        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Story Area =================-->
        <section class="about_story_area p_120">
        	<div class="container">
        		<div class="row story_inner">
        			<div class="col-lg-6">
        				<div class="story_text">
        					<h2>About <br />Our Story</h2>
        					<p>The Cake is a European concept bakery founded in 2014 to bring the authentic taste of European home baking to Karachi. In a span of two years, Delizia has opened several outlets across the city.Our cakes, cupcakes and brownies owe their unique look and exceptional flavor to top quality raw ingredients, our baking expertise, and a passionate team of people who love to live their lives by the oven. .</p>
        					<p>At The Cake shop we serve you with premium quality baked goods made with love using carefully sourced ingredients, blended in our special recipes that keep us just ‘That’ step ahead of the rest.</p>

        					<a class="main_btn" href="about.php">View Full Story</a>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="story_img">
        					<img class="img-fluid" src="img/story/q.jfif" alt="" height="510" width="555">
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Story Area =================-->
        
       
        
        
        
       <!--================Member Area =================-->
        <section class="testimonials_area pad_top">
        	<div class="container">
        		<div class="testi_slider owl-carousel">
        			<div class="item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/ee.png" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Altamash Ansari</h4>
									<h5> Chief Executive</h5>
									<p>“The Chief Executive Officer reports directly to, and is accountable to, the Board of Directors for the performance of a company. The Board of Directors (BoD) is a group of individuals who are elected to represent the shareholders of the company. The CEO often sits on the board and, in some cases, she or he is the chairperson.”</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/eeee.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Shahzina Khan</h4>
									<h5>Chairperson of company</h5>
									<p>“The Chairperson of the Board is technically superior to the Chief Executive Officer, as he or she cannot make major moves without the approval of the board. The chairperson could essentially become the ultimate boss of the company or organization”</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/eee.png" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Maib Pervaiz</h4>
									<h5>Chief Executive Officer</h5>
									<p>“The Chief Executive Officer reports directly to, and is accountable to, the Board of Directors for the performance of a company. The Board of Directors (BoD) is a group of individuals who are elected to represent the shareholders of the company. The CEO often sits on the board and, in some cases, she or he is the chairperson.”</p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Member Area =================-->
        
       

        
 <!--================ start footer Area  =================-->	
        <footer class="footer-area p_120">
            <div class="container">
                <div class="row">
                   
                   
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                           <h6 class="footer_title">The Bakery Shop</h6>
                            <ul class="list">
 <a class="logo" href="index.php"><img src="img/logo-2.png" alt="" height=100></a>
                            	
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                           <h6 class="footer_title">Resources</h6>
                            <ul class="list">
                            	<li><a href="about.php">Abour Us</a></li>
                            	<li><a href="index.php">Home</a></li>
                            	<li><a href="contact.php">Contact</a></li>
                            	<li><a href="recipe.php ">Recipes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3 class="footer_title">About</h3>
        					</div>
        					<p>The Cake is a European concept bakery founded in 2014 to bring the authentic taste of European home baking to Karachi. In a span of two years, Delizia has opened several outlets across the city.Our cakes, cupcakes and brownies owe their unique look and exceptional flavor to top quality raw ingredients, our baking expertise, and a passionate team of people who love to live their lives by the oven. </p>
        					
        				</aside>
                    </div>
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0">Copyright © 2020 All rights reserved   |   This website is made  <i class="lnr lnr-heart"></i> by sahar mushtaq </p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        
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
        <script src="vendors/swiper/js/swiper.min.js"></script>
        <script src="vendors/scroll/jquery.mCustomScrollbar.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>