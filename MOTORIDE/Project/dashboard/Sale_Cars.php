<?php session_start();?>
<?php
if($_SESSION['admin']==null){
	header('location:./AdminLogin.php');
}
?>
<?php
include ('head.php');
?>


<h4 class="page-title">Sale Cars</h4>
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
				<label for="largeInput">Date</label>
				<input name="Date" type="text" class="form-control form-control" id="defaultInput" placeholder="Date">
			</div>
			<div class="form-group">
				<label for="largeInput">Deliverable</label>
				<input name="Deliverable"type="text" class="form-control form-control" id="defaultInput" placeholder="Deliverable">
			</div>

			<div class="form-group">
				<label for="largeInput">Price</label>
				<input name="Price"type="text" class="form-control form-control" id="defaultInput" placeholder="Price">
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
include ('footer');

?>


<?php
include ('db.php');
if(isset($_POST['sub']))
{
	$c_id=$_POST['Car_id'];
	$u_id=$_POST['User_id'];
	$date=$_POST['Date'];
	$dlvry=$_POST['Deliverable'];
	$Price=$_POST['Price'];
	

	$q="INSERT INTO salecar (Car_id,User_id,Date,Deliverable,Price) VALUES ('$c_id','$u_id','$date','$dlvry','$Price')";
	$r=mysqli_query($con,$q);

	if($r)
	{
		$msg="insert";
		echo $mesg;
	}
	else{
		$msg="not";
		echo $msg;
	}

}


?>