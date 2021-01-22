<?php session_start();?>
<?php
if($_SESSION['admin']==null){
	header('location:./AdminLogin.php');
}
?>
<?php
include ('head.php');


?>

<h4 class="page-title">Cars</h4>
<div class="row">
</div>
<form method="POST" action="#" enctype="multipart/form-data">
	<div class="card">
		
		<div class="card-body">

			<div class="form-group">
				<label for="largeInput">Car_Name</label>
				<input name="car_name" type="text" class="form-control form-control" id="defaultInput" placeholder="Car_Name" required="">
			</div>
			<div class="form-group">
				<label for="largeInput">Model_Year</label>
				<input name="Model_year" type="text" class="form-control form-control" id="defaultInput" placeholder="Model_Year" required="">
			</div>
			<div class="form-group">
				<label for="largeInput">Specification</label>
				<input name="Specification" type="text" class="form-control form-control" id="defaultInput" placeholder="Specification" required="">
			</div>
			<div class="form-group">
				<label for="largeInput">Company Name</label>
				<input name="Company" type="text" class="form-control form-control" id="defaultInput" placeholder="Company Name" required="">
			</div>
			<div class="form-group">
				<label for="largeInput">No_Plate</label>
				<input name="No_plate" type="text" class="form-control form-control" id="defaultInput" placeholder="No_Plate" required="">
			</div>
			<div class="form-group">
				<label for="largeInput">Available</label>
				<input name="Available" type="text" class="form-control form-control" id="defaultInput" placeholder="Available" required="">
			</div>
			<div class="form-group">
				<label for="largeInput">Price</label>
				<input name="Price" type="text" class="form-control form-control" id="defaultInput" placeholder="Price" required="">
			</div>
			<div class="form-group">
				<label for="largeInput">Rent Price</label>
				<input name="rprice" type="text" class="form-control form-control" id="defaultInput" placeholder="Price" required="">
			</div>

			<div class="form-group"> 
				<label for="largeInput">Picture</label>
				<input name="image" type="file" class="form-control form-control" id="defaultInput" required="">
			</div>
		</div>
		<div class="card-action">
			<button class="btn btn-success" type="submit" name="sub">Submit</button>
			<button class="btn btn-danger">Cancel</button>
		</div>
	</div>
</form>
</div>

</div>
</div>
</div>



    <?php
include('db.php');
if(isset($_POST["sub"]))
{
$a=$_POST["car_name"];
$b=$_POST["Model_year"];
$c=$_POST["Specification"];
$d=$_POST["Company"];
$e=$_POST["No_plate"];
$f=$_POST["Available"];
$g=$_POST["Price"];
$h=$_POST["rprice"];


$image = $_FILES['image']['name'];
$imgtn=$_FILES['image']['tmp_name'];
$imgty=$_FILES['image']['type'];
$imgsi=$_FILES['image']['size'];
$folder="myimages/";
if($imgty == "image/png" || $imgty == "image/jpg" || $imgty=="image/jpeg")
{
if($imgsi<=1000000)
{
  $path= $folder . $image;

  move_uploaded_file($imgtn,$path);
$cas="INSERT INTO cars(Car_name,Model_year,Company,No_plate,Price,rent_price,Specification,Available,Pic) VALUES
('$a','$b','$d','$e','$g','$h','$c','$f','$path')";
$crew=mysqli_query($con,$cas);
if($crew)
{
echo "<script> alert('Done'); </script>";
}
else
{
echo "<script> alert('This car is already taken please try another car');</script>";
}
}
else
{
echo "<script> alert('Image size error'); window.location.href='Cars.php';</script>";
}


}

else{
echo "<script> alert('Image format error'); window.location.href='cars.php';</script>";
}
}
?>