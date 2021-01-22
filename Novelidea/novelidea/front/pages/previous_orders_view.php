<?php

include('header.php');
include('connection.php');

if (!isset($_SESSION["ID_U"]))
{
   header("location: login.php");
}

$x= $_SESSION['ID_U'];
$query="SELECT * from orders WHERE customer_id='$x' AND (`status`='Cancelled' OR `status`='Delivered')";

$rows=mysqli_query($con,$query);

?>
	    	<div style="margin-top: 25px;" class="container-fluid px-md-4">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
		  <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="profile.php"><?php echo "$_SESSION[NAME_U]'s Profile"; ?> <i class="fa fa-chevron-right"></i></a></span></p>
            <h2 style="margin-bottom: 25px;">Completed/Cancelled Orders</h2>

          </div>
		</div>
		
		<section class="ftco-section">
			<div style="margin-top: -150px;" class="container">
				<div class="row">
				

				<?php
				while($data=mysqli_fetch_assoc($rows)){
echo "
					<div class='col-md-6 col-lg-4 ftco-animate'>
						<div class='staff'>
							<div class='text pt-3 px-3 pb-4 text-center'>
							<a href='order_tracking.php?idd=$data[id]'><h3>Tracking ID# ".$data['id']."</h3></a>
							</div>
						</div>
					</div>";
				}
				$totalrows = mysqli_num_rows($rows);
				if($totalrows == 0)
				{
					echo "
					<div class='col-md-6 col-lg-12 ftco-animate'>
						<div class='staff'>
							<div class='text pt-3 px-3 pb-4 text-center'>
							<p><h2 style='color:red;'>You have no previous orders.</h2></p>
							</div>
						</div>
					</div>";
				}
				?>
				</div>
			</div>
		</section>

		<?php

include('footer.php');

?>