<?php
include('connection.php');
session_start();
if(!isset($_SESSION['ID_U']))
{
	$_SESSION['ID_U']=null;
}

?>

<?php

function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$current_page = PageName();

$q = "SELECT * from info";
$rows = mysqli_query($con,$q);
$data = mysqli_fetch_assoc($rows);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A Novel Idea Library</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <link rel="icon" href="../images/book.png" type="image/x-icon">

    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/style_book.css">
	<link rel="stylesheet" href="../css/style_order.css">
	<link rel="stylesheet" href="../css/style_sticker.css">
	<link rel="stylesheet" href="../css/style_search.css">

	
	<!-- Font Icon -->
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  </head>
  <body>

  	<div class="container-fluid px-md-5  pt-4 pt-md-5">
			<div class="row justify-content-between">
				<div class="col-md-8 order-md-last">
					<div class="row">
						<div class="col-md-6 text-center">
							<a class="navbar-brand" href="index.php">A Novel Idea <span>Library</span> <small>Online Book Store</small></a>
						</div>
						<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
							<?php
						if($_SESSION['ID_U']!=null)
{
	echo "<p class='navbar-brand' href='#'><small style='font-size: 12px; font-family: calibri; color: grey;'>WELCOME, </br> $_SESSION[NAME_U]</small></p>";
	echo "<a href='profile.php'><button placeholder='' class='btn btn-info'>Profile</button></a>"; 
	echo "&nbsp";
	echo "<a href='logout.php'><button placeholder='' class='btn btn-danger'>Logout</button></a>";
	echo "&nbsp";
echo "<a href='viewCart.php'><button placeholder='' class='btn btn-warning'><i class='fas fa-shopping-cart'></i></button></a>";
}
else
{
echo "<a href='login.php'><button placeholder='' class='btn btn-info'>Login</button></a>"; 
echo "&nbsp";
echo "<a href='signup_form.php'><button placeholder='' class='btn btn-danger'>Signup</button></a>";

}

						?>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="social-media">
		    		<p class="mb-0 d-flex">
		    			<a href="<?php echo "$data[facebook]"; ?>" class="d-flex align-items-center justify-content-center"><span class="fab fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="<?php echo "$data[twitter]"; ?>" class="d-flex align-items-center justify-content-center"><span class="fab fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="<?php echo "$data[instagram]"; ?>" class="d-flex align-items-center justify-content-center"><span class="fab fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    		</p>
	        </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item <?php echo $current_page == 'index.php' ? 'active':NULL ?>"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item <?php echo $current_page == 'about.php' ? 'active':NULL ?>"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item <?php echo $current_page == 'book.php' ? 'active':NULL ?>"><a href="book.php" class="nav-link">Books</a></li>
				<li class="nav-item <?php echo $current_page == 'author.php' ? 'active':NULL ?>"><a href="author.php" class="nav-link">Authors</a></li>
				<li class="nav-item <?php echo $current_page == 'subscription.php' ? 'active':NULL ?>"><a href="subscription.php" class="nav-link">Subscription Info</a></li>
	          <li class="nav-item <?php echo $current_page == 'contact.php' ? 'active':NULL ?>"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->