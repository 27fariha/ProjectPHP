<?php
include('connection.php');
include('header.php');
if(!isset($_SESSION['SUBS_U'])){
	$_SESSION['SUBS_U']=null;
}

if(isset($_SESSION['SUBS_U'])){


$x=$_SESSION['SUBS_U'];
$query1="SELECT * from subscription where Subscription_ID='$x'";
$rows1=mysqli_query($con,$query1);
$data1=mysqli_fetch_assoc($rows1);
}

$query="SELECT * from books b JOIN category c on c.Category_ID = b.Category_ID_F ORDER BY Release_Date DESC LIMIT 6";
$rows=mysqli_query($con,$query);

$query2="SELECT DISTINCT b.Book_Name, b.Brief_Description, b.Book_Cover, b.Book_ID, b.Premium from books b JOIN order_items oi on oi.product_id = b.Book_ID ORDER BY oi.quantity DESC LIMIT 4";
$rows2=mysqli_query($con,$query2);

?>

    <section class="hero-wrap" style="background-image: url('../images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-8 ftco-animate d-flex align-items-end">
          	<div class="text w-100">
	            <h1 class="mb-4">Good books don't give up all their secrets at once</h1>
	            <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            <p><a href="book.php" class="btn btn-primary py-3 px-4">View All Books</a></p>
            </div>
          </div>
        </div>
	  </div>
	  <h1 style="text-align:center; margin-top:-150px; font-style: italic;" class="mb-4">Best Selling Books<span><i class="far fa-hand-point-down"></i></span></h1>
	</section>


	<section class="ftco-section ftco-no-pt mt-5 mt-md-0">
    	<div class="container">
    		<div class="row">
			<?php while($data2=mysqli_fetch_assoc($rows2)){ ?>
    			<div class="col-md-3 d-flex align-items-stretch">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
							<?php
						if($data2["Premium"]=="Yes"){
						echo "<div class='ribbon'><span>PREMIUM</span></div>";
						}
						?>
	    					<div class="icon align-items-center justify-content-center" style="background-image: url('<?php echo "../../Dashboard/images/".$data2['Book_Cover']." ";?>')">			
							<span style="color: white; --fa-primary-opacity: 0.10"><i class="far fa-hand-peace"></i></span>	
						</div>
						</div>
						<?php
						if($_SESSION['ID_U']!=null){
						echo "<h2><a href='book_detail.php?idd=$data2[Book_ID]' data-toggle='tooltip' data-placement='right' title='View details of this $data2[Book_Name]'>".$data2["Book_Name"]."</a></h2>";
						}
						else
						{
						echo "<h2><a style='cursor:pointer;' onclick='book_alert()' data-toggle='tooltip' data-placement='right' title='View details of $data2[Book_Name]'>".$data2["Book_Name"]."</a></h2>";
						}
						?>
    					<p><?php echo "$data2[Brief_Description]"; ?></p>
    				</div>
				</div>
				<?php } ?>
    		</div>
		</div>
	</section>

    <section style="margin-top: -250px;" class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(../images/about-1.jpg);">
					</div>
					<div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
	          <div class="heading-section">
			  <span class="subheading">Welcome To A Novel Idea</span>
	            <h2 class="mb-4">A Library Created By Authors</h2>

	            <p>Thanks to the imagination of skilled authors, even books set in the real world can be filled with mysteries and intrigue. However, some authors are not content with simply creating characters, but prefer to also re-imagine the world's that they inhabit. We have in our library, some of the amazing universes conjured up by talented authors who were not afraid to dream big.</p>

	            <a href="author.php" class="btn btn-primary">View All Our Authors</a>
	          </div>

					</div>
				</div>
			</div>
		</section>
		
		<section style="margin-top: -50px;" class="ftco-section ftco-no-pt">
    	<div class="container-fluid px-md-4">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Books</span>
            <h2>New Releases</h2>
			<a href="book.php" class="btn btn-primary">View All Our Books</a>
          </div>
        </div>
    		<div class="row">
			<?php

        while($data=mysqli_fetch_assoc($rows)){
        echo "
			<div class='col-md-6 col-lg-4 d-flex'>";
			if($data["Premium"]=="Yes"){
				echo "<div class='ribbon'><span>PREMIUM</span></div>";
				}
    				echo "<div class='book-wrap d-lg-flex'>"; ?>
    					<div class="img d-flex justify-content-end" style="background-image: url('<?php echo "../../Dashboard/images/".$data['Book_Cover']." ";?>')" >
						<?php
					echo "		<div class='in-text'>";
					if($_SESSION['ID_U']!=null)
					{
					echo "<a href='book_detail.php?idd=$data[Book_ID]' class='icon d-flex align-items-center justify-content-center' data-toggle='tooltip' data-placement='left' title='View details of this book'>
					<span class='fa fa-search'></span></a>";
					}
					else
					{
						echo "<a style='cursor:pointer;' onclick='book_alert()' class='icon d-flex align-items-center justify-content-center' data-toggle='tooltip' data-placement='left' title='Login to view details of this book'>
						<span class='fa fa-search'></span></a>";	
					}
					if($_SESSION['ID_U']!=null)					
					{
						if($data["Hardcopy_Availability"]=="Yes")
						{
    					echo "	<a href='cartAction.php?action=addToCart&id=".$data["Book_ID"]."' class='icon d-flex align-items-center justify-content-center' data-toggle='tooltip' data-placement='left' title='Add to cart'>
    								<span class='fa fa-shopping-cart'></span>
								</a>";
						}
						if($x==3)
						{
							echo "	<a href='../../Dashboard/ebooks/".$data['PDF_File']."' download class='icon d-flex align-items-center justify-content-center' data-toggle='tooltip' data-placement='left' title='Download'>
										<span><i class='fa fa-cloud-download-alt'></i>
										</span>
									</a> ";
						}
						if($x==6)
						{
							if($data["Premium"]=="No"){
							echo "	<a href='../../Dashboard/ebooks/".$data['PDF_File']."' download class='icon d-flex align-items-center justify-content-center' data-toggle='tooltip' data-placement='left' title='Download'>
										<span><i class='fa fa-cloud-download-alt'></i>
										</span>
									</a> ";
						}
						}
					}
    				echo "	</div>
    					</div>
						<div class='text p-4'>
							<p class='mb-2'><span class='price'>".$data['Book_Name']."</span></p>";
							if($data["Hardcopy_Availability"]=="Yes")
							{
							echo "<p class='mb-2'><span class='price sale'>$".$data['Price']."</span></p>";
							echo "<p class='mb-2'><span class='price sale'>Hardcopy | eBook</span></p>";
							}
							else
							{
							echo "<p class='mb-2'><span class='price sale'>FREE</span></p>";
							echo "<p class='mb-2'><span class='price sale'>eBook</span></p>";
							}
    						echo "<h2>".$data['Brief_Description']."</h2>
							<span class='position'>By ".$data['Author']."</span>
    					</div>
    				</div>
				</div>";
		}
				?>

    		</div>
    	</div>

	</section>
	
	<script>
function book_alert() {
  alert("Please login to view details of this book.");
  return false;
}
</script>

	<?php

include('footer.php');

?>