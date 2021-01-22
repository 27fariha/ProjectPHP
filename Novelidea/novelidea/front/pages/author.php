<?php

include('header.php');
include('connection.php');
$query="SELECT * from books b JOIN category c on c.Category_ID = b.Category_ID_F ORDER BY Author ASC";

$rows=mysqli_query($con,$query);

?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate mb-0 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Authors <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Authors</h1>
          </div>
        </div>
      </div>
	</section>
	
    	<div style="margin-bottom: -175px; margin-top: 25px;" class="container-fluid px-md-4">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">The heart and soul of our Store</span>
            <h2 style="margin-bottom: 25px;">Our Authors</h2>

          </div>
		</div>
</div>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">

				<?php
				while($data=mysqli_fetch_assoc($rows)){
				echo "
					<div class='col-md-6 col-lg-3 ftco-animate'>
						<div class='staff'>
							<div class='text pt-3 px-3 pb-4 text-center'>
							<a href='book_author.php?idd=$data[Book_ID]'><h3>".$data['Author']."</h3></a>
							</div>
						</div>
					</div>
				";
				}
				?>

				</div>
			</div>
		</section>

		<?php

include('footer.php');

?>