<?php session_start();?>
<?php
if($_SESSION['admin']==null){
	header('location:./AdminLogin.php');
}
?>
<?php
include ('head.php');


?>
<h4 class="page-title">Rent Cars</h4>
<div class="row">
</div>
<form method="POST" action="">
	<div class="card">
		<div class="card-header">
			<div class="card-title">Form Control Styles <button><a href="./Logout.php">Log Out</a></button></div>
		</div>
		<div class="card-body">
			
			<div class="form-group">
				<label for="largeInput">Car_id</label>
				<?php
				include ('db.php');
				$query="Select * from Cars";
				$rows=mysqli_query($con,$query);
				echo "<select name='Car_name'>";
				while ($data=mysqli_fetch_array($rows))
				{
					echo "<option value='$data[Id]'>".$data[Car_name]."</option>";
				}
				{
					echo "</select>";
				}

				?>
			</div>
			<div class="form-group">
				<label for="largeInput">User_id</label>
				<?php
				include ('db.php');
				$query="Select * from register";
				$rows=mysqli_query($con,$query);
				echo "<select name='User_name'>";
				while ($data=mysqli_fetch_array($rows))
				{
					echo "<option value='$data[Id]'>".$data[User_name]."</option>";
				}
				{
					echo "</select>";
				}

				?>
			</div>
			<div class="form-group">
				<label for="largeInput">Duration</label>
				<input name="Duration" type="text" class="form-control form-control" id="defaultInput" placeholder="Duration">
			</div>

		</div>
		<div class="form-group">
			<label for="largeInput">Date</label>
			<input name="Duration" type="text" class="form-control form-control" id="defaultInput" placeholder="Duration">
		</div>

		<div class="form-group">
			<label for="largeInput">Price</label>
			<input name="Price" type="text" class="form-control form-control" id="defaultInput" placeholder="Price">
		</div>
		
		
	</div>
	<div class="card-action">
		<button class="btn btn-success type="submit" name='sub'">Submit</button>
		<button class="btn btn-danger">Cancel</button>
	</div>
</div>
</form>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

<?php
include ('footer.php');
?>



<?php
include('db.php');
if(isset($_POST['sub']))
{
	$c_id=$_POST['Car_id'];
	$u_id=$_POST['User_id'];
	$dur=$_POST['Duration'];
	$date=$_POST['Date'];
	$pr=$_POST['Price'];


	$q="INSERT into rentcar (Car_id,User_id,Duration,Date,Price) VALUES ('$c_id','$u_id','$dur','$date','$pr')";
	$r=mysqli_query($con,$q);

	if($r)
	{
		echo "<script> alert('insert');</script>";
	}
	else
	{
		echo "<script> alert('error');</script>";
	}
}
?>