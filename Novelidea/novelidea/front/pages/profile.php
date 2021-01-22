<?php

include('header.php');
include('connection.php');

if (!isset($_SESSION["ID_U"]))
{
   header("location: login.php");
}

$query="SELECT * from books b JOIN category c on c.Category_ID = b.Category_ID_F ORDER BY Author ASC";

$rows=mysqli_query($con,$query);

?>
	    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate mb-0 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span> Profile of </span></p>
            <h1 class="mb-0 bread"><?php echo $_SESSION['NAME_U'] ?></h1>
		  </div>
		</div>
      </div>
	</section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">


					<div class='col-md-6 col-lg-4 ftco-animate'>
						<div class='staff'>
							<div class='text pt-3 px-3 pb-4 text-center'>
							<a href='signup_update.php'><h3>Edit Info</h3></a>
							</div>
						</div>
					</div>

					<div class='col-md-6 col-lg-4 ftco-animate'>
						<div class='staff'>
							<div class='text pt-3 px-3 pb-4 text-center'>
							<a href='active_orders_view.php'><h3>Active Orders Tracking</h3></a>
							</div>
						</div>
					</div>

					<div class='col-md-6 col-lg-4 ftco-animate'>
						<div class='staff'>
							<div class='text pt-3 px-3 pb-4 text-center'>
							<a href='previous_orders_view.php'><h3>Previous Orders</h3></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<?php

include('footer.php');

?>