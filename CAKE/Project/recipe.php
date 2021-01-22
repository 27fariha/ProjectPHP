
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
<?php
include('header.php')
?>
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Recipes Of The Day</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="recipe.php">Recipes Of The Day </a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
<?php
include ('connect.php');
$qu="SELECT * FROM recipe";
$res=mysqli_query($con,$qu);
?>

<br><br>
<div class="container">
<div class="row">
<section class=about_story_area p_120>
            <div class=container>
<div class=card-deck>
              
                 <?php
while($data=mysqli_fetch_assoc($res))
  {
    echo"

    <div class=card>
    <img src='dashboard/$data[Image]' alt='' height='450 width='450'>
    <div class=card-body>
      <h3 class=card-title> $data[Title]</h3>
     <span style='color:Blue'> <h4>Ingredience</h4></span>
      <p class=card-title> $data[Ingredience]</p>
       <span style='color:Blue'> <h4>Recipe</h4></span>
            <p class=card-text style='text-align: justify;'>$data[Recipe]</p>
    
    </div>
  </div>
";
}?>
</div>

            </div>
          </section>
</div>
</div>
<br><br><br>





       <?php
include ('footer.php');
        
        
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