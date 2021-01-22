<?php

include('header.php');
include('connection.php');
if(isset($_GET['cid']))
{
	$c = $_GET['cid'];
	// $query="SELECT * from books b JOIN category c on c.Category_ID = b.Category_ID_F ORDER BY Release_Date DESC WHERE c.Category_ID='$x'";
	$query="SELECT * from books b JOIN category c on c.Category_ID = b.Category_ID_F WHERE c.Category_ID='$c' ORDER BY Release_Date DESC";
}
else if (isset($_POST['search'])) 
{
		$xyz=$_POST['txt'];
		$query="SELECT * from books b JOIN category c on c.Category_ID = b.Category_ID_F WHERE b.Book_Name LIKE '%".$xyz."%' ORDER BY Release_Date DESC";
	}

else if (!isset($_POST['search']) && !isset($_GET['cid'])) {
	$query="SELECT * from books b JOIN category c on c.Category_ID = b.Category_ID_F ORDER BY Release_Date DESC";

}
$rows=mysqli_query($con,$query);

if(isset($_SESSION['SUBS_U'])){


	$x=$_SESSION['SUBS_U'];
	$query1="SELECT * from subscription where Subscription_ID='$x'";
	$rows1=mysqli_query($con,$query1);
	$data1=mysqli_fetch_assoc($rows1);
	}


	


?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate mb-0 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Book Store <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Book Store</h1>
		  </div>
		</div>
      </div>
	</section>
	

	<form method="POST" id="search" action="">
<div style="margin-top: 50px;" class="col-md-12 d-md-flex justify-content-end mb-md-0 mb-3">
    <div class="buscar-caja"> 
		<input type="text" name="txt" class="buscar-txt" placeholder="Search ....."/> 
		<button type="refresh" data-toggle="tooltip" data-placement="right" title="Click to reset this search box" name="refresh" id="reset" onClick="reset();" style="color:black;" class="buscar-btn"> <i class="fa fa-refresh"></i></button> &nbsp;
		<button type="submit" data-toggle="tooltip" data-placement="left" title="Click to search" name="search" style="color:black;" class="buscar-btn"> <i class="fa fa-search"></i></button>
    </div> 
</form>

						</div>
		
		<section style="padding-top: 0px;" class="ftco-section">
			<div class="container">
			<p style='text-align: center; color: green; font-style: italic; font-family: times;' class="breadcrumbs mb-0"><span class="mr-2"><b>Note:</b> If all books are not displaying then select &nbsp; <b> Show all books </b> &nbsp; from below <span>

				<div class="row justify-content-center mb-4">
          <div class="col-md-10">
          	<div class="row mb-4">
							<div class="col-md-12 d-flex justify-content-between align-items-center">
								<h4 class="product-select">Select from Categories</h4>
								<?php
								$q1="select * from category";
								$rows1=mysqli_query($con,$q1);
						echo "<select id='cat' onchange='location = this.value;' name='cat' class='form-control'>";
						$select= $_POST['selectedValue'];
						if($select != "book.php")
						{
						echo "<option value='' style='color:red;' disabled selected hidden>********Select********</option>";
						echo $select;
					}

						echo "<option value='book.php' style='font-style: italic; font-family: times;'>Show All books</option>";
						while($data1=mysqli_fetch_assoc($rows1))
						{
							echo "<option value='book.php?cid=$data1[Category_ID]'>". $data1['Category_Name'] ." </option>";
						}
						echo "</select>";

						?>
							</div>

						</div>					
          </div>
        </div>
			</div>
    	<div class="container-fluid px-md-5">
    		<div class="row">
			<?php

        while($data=mysqli_fetch_assoc($rows)){
        echo "
			<div class='col-md-6 col-lg-4 d-flex'>";
			if($data["Premium"]=="Yes"){
			echo "<div class='ribbon'><span>PREMIUM</span></div>";
			}
    		echo "		<div class='book-wrap d-lg-flex'>"; ?>
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
function submit() { 
  /*Put all the data posting code here*/ 
 document.getElementById("search").reset(); 
} 
</script>

<script>

$(document).ready(function(){

$("#cat").change(function(){
	var deptid = $(this).val();

	$.ajax({
		url: 'book.php',
		type: 'post',
		data: {depart:deptid},
		dataType: 'json',
		success:function(response){

			var len = response.length;

			$("#sel_user").empty();
			for( var i = 0; i<len; i++){
				var id = response[i]['id'];
				var name = response[i]['name'];
				
				$("#sel_user").append("<option value='"+id+"'>"+name+"</option>");

			}
		}
	});
});

});

</script>

<script>
function book_alert() {
  alert("Please login to view details of this book.");
  return false;
}
</script>


	<?php

include('footer.php');

?>