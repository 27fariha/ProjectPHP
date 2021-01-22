<?php

include('header.php');
include('connection.php');
$query="SELECT * from subscription ORDER BY Charges DESC";

$rows=mysqli_query($con,$query);

?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate mb-0 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Subscription <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Packages Details</h1>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">

    	<div class="container-fluid px-md-5">
    		<div class="row">

			<?php

        while($data=mysqli_fetch_assoc($rows)){
        echo "
			<div class='col-md-6 col-lg-4 d-flex'>
    				<div class='book-wrap d-lg-flex'>"; ?>
    					<div class="img d-flex justify-content-end" style="background-image: url('<?php echo "../../Dashboard/images/".$data['Image']." ";?>')" >
						<?php
					echo "		<div class='in-text'>";
				if($_SESSION['ID_U']!=null)
				{
					if($_SESSION['SUBS_U']==$data['Subscription_ID'])					
					{
    						echo "	<a class='icon d-flex align-items-center justify-content-center' data-toggle='tooltip' data-placement='left' title='You have already subscribed to $data[Subscription_Name] Package'>
    								<span><i class='fas fa-check fa-2x'></i></span>
    							</a>";
					}
					else
					{
						echo "	<a href='signup_update.php?idd=$_SESSION[ID_U]' class='icon d-flex align-items-center justify-content-center' data-toggle='tooltip' data-placement='left' title='Subscribe to $data[Subscription_Name] Package'>
						<span><i class='fab fa-usps fa-2x'></i></span>
					</a>";
					}
				}
				else
				{
					echo "	<a href='signup_form.php' class='icon d-flex align-items-center justify-content-center' data-toggle='tooltip' data-placement='left' title='Subscribe to $data[Subscription_Name] Package'>
					<span><i class='fab fa-usps fa-2x'></i></span>
				</a>";
				}
    					echo "</div>
    					</div>
    					<div class='text p-4'>
							<p class='mb-2'><span class='price'>".$data['Subscription_Name']."</span></p>";
							if($data['Charges']!=0)
							{
							echo "<p class='mb-2'><span class='price sale'>$".$data['Charges']."</span></p>";
							}
							else
							{
								echo "<p class='mb-2'><span class='price sale'>FREE</span></p>";
							}
    						echo "<h2>".$data['Description']."</h2>
							<span class='position'>".$data['Duration']."</span>
    					</div>
    				</div>
				</div>";
		}
				?>

    		</div>
<!--		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
    	</div>
    </section>

	<?php

include('footer.php');

?>