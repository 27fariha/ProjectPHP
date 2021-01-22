<?php

include('header.php');
include('connection.php');

$x=$_GET['idd'];
$q="SELECT * from books b JOIN category c on c.Category_ID = b.Category_ID_F WHERE Book_ID='$x' ORDER BY Release_Date DESC ";
$rows=mysqli_query($con,$q);
$rows1=mysqli_query($con,$q);

?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate mb-0 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span><span class="mr-2">Books of </span> <span>
            <h1 class="mb-0 bread">
			<?php         
			  while($data1=mysqli_fetch_assoc($rows1)){
				echo "$data1[Author]"; 
				} 
				?>
			</h1>
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
			<div class='col-md-6 col-lg-4 d-flex'>";
			if($data["Premium"]=="Yes"){
				echo "<div class='ribbon'><span>PREMIUM</span></div>";
				}
    			echo "	<div class='book-wrap d-lg-flex'>"; ?>
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
	
	<script>
function book_alert() {
  alert("Please login to view details of this book.");
  return false;
}
</script>

	<?php

include('footer.php');

?>