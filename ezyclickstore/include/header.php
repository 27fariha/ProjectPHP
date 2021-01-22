<!--
<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "editing_ezyclick";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//} 

//$sql = "SELECT product_id from products ";
//$result = $conn->query($sql);

//if ($result->num_rows > 0) {
    // output data of each row
   // while($row = $result->fetch_assoc()) {
     //   echo "id: " . $row["product_id"]. "<br>";
 //   }
//} //else {
  //  echo "0 results";
//}
//$conn->close();
?> -->

<style type="text/css">
	#ex4 .p1[data-count]:after{
  position:absolute;
  right:10%;
  top:8%;
  content: attr(data-count);
  font-size:40%;
  padding:.2em;
  border-radius:50%;
  line-height:1em;
  color: white;
  background:rgba(255,0,0,.85);
  text-align:center;
  min-width: 1em;
  //font-weight:bold;
}
</style>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
		<div class="container">
		<div class="row">
		<div class="col-sm-6">
		<div class="contactinfo">
   <ul class="nav nav-pills">
   <li><a href="#"><i class="fa fa-phone"></i> +92 123 456 789
   </a></li>
   <li><a href="#"><i class="fa fa-envelope"></i>info@ezyclick.org
   </a></li>
   </ul>
   </div></div>
		<div class="col-sm-6">
		<div class="social-icons pull-right">
   <ul class="nav navbar-nav">
   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
   <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
			</div></div>
			</div></div>
		    </div><!--/header_top-->
	<div class="header-middle"><!--header-middle-->
	<div class="container">
	<div class="row">
	<div class="col-sm-4">
	<div class="logo pull-left">
<a href="index.php">
<img src="images/logo.jpg"  style="width:100px"alt=""></a>
	</div>
	</div>
		<div class="col-sm-8">
		<div class="shop-menu pull-right">
	<ul class="nav navbar-nav">
<!--<li><a href="#"><i class="fa fa-user"></i> Account</a></li>-->
		<li><div id="ex4">
 <a href="cart.php"> <span class="p1 fa-stack fa-2x has-badge" data-count="0">
    <!--<i class="p2 fa fa-circle fa-stack-2x"></i>-->
    <i class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse" data-count="4b"></i>
  </span></a>
</div></li>
	<!--<li><a href="#"><i class="fa fa-lock"></i> Login</a></li>-->

<!--<li><?php
                        // count products in cart
                       // $cart_count=count($_SESSION['cart']);
                        ?>
                       Cart <span class="badge" id="comparison-count"><?php //echo $cart_count; ?></span> 
                    </li> -->

	</ul>
			</div></div>
			</div></div>
		    </div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
		<div class="container">
		<div class="row">
		<div class="col-sm-9">
		<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
   <span class="sr-only">Toggle navigation</span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>
		</div>
	    <div class="mainmenu pull-left">
	<ul class="nav navbar-nav collapse navbar-collapse">
	<li><a href="index.php">Home</a></li>
<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down">
    </i></a>
    <ul role="menu" class="sub-menu"> 
	<li><a href="cart.php">Cart</a></li> 
    </ul>
    </li> 
    <li><a href="jewellery.php">Jewellery</a></li> 
	<li><a href="cosmetics.php">Cosmetics</a></li>
	<li><a href="contact.php">Contact</a></li>
	</ul>
	</div></div>
	<div class="col-sm-3">
	<div class="search_box pull-right">
	
    <form action="search.php" method="post">
	<input type="text" style="width:150px;height:50px; color:#000" name="search_text" placeholder="Search">
	<button  style="width:50px;height:50px; color:#000;background:none;border-style: none;background-color: #ffa500; transition: 0.3s" onMouseOver="this.style.color='white'"   onMouseOut="this.style.color='black'" type="submit" name="submit" value="submit"><i class="fa fa-search"></i></button>
<form>
        
		</div></div>
		</div></div>
		</div><!--/header-bottom-->
	</header><!--/header-->