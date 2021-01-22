<?php session_start();?>
<?php
if($_SESSION['admin']==null){
	header('location:./AdminLogin.php');
}
?>
<?php include ('head.php'); ?>
<h4 class="page-title">Admin</h4>
<div class="row">
</div>
<form method="POST" action="" enctype="multipart/form-data">
	<div class="card">
		<div class="card-header">
			<div class="card-title">Form Control Styles <button><a href="./Logout.php">Log Out</a></button></div>
		</div>
		<div class="card-body">

			<div class="form-group">
				<label for="largeInput">User Name</label>
				<input name="Name" type="text" class="form-control form-control" id="defaultInput" placeholder="Username">
			</div>
			<div class="form-group">
				<label for="largeInput">Email</label>
				<input name="email" type="text" class="form-control form-control" id="defaultInput" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="largeInput">Password</label>
				<input name="Pswrd" type="text" class="form-control form-control" id="defaultInput" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="largeInput">Picture</label>
				<input name="picture" type="file" class="form-control form-control" id="defaultInput" placeholder="Picture">
			</div>

		</div>
		<div class="card-action">
			<button class="btn btn-success" type="submit" name='sub'>Submit</button>
			<button class="btn btn-danger">Cancel</button>
		</div>
	</div>
</form>
</div>
</div>
</div>
</div>
</div>

<?php
include ('footer.php');

?>

<?php
include ('db.php');

if(isset($_POST['sub']))
{
	$name=$_POST['Name'];
	$email=$_POST['email'];
	$pas=$_POST['Pswrd'];
	$image = $_FILES['picture']['name'];
	$imgtn=$_FILES['picture']['tmp_name'];
	$imgty=$_FILES['picture']['type'];
	$imgsi=$_FILES['picture']['size'];
	$folder="myimages/";
	if($imgsi<=1000000){
		$path= $folder.$image;
		move_uploaded_file($imgtn,$path);

		$q="INSERT into admin(Name,email,Pswrd,picture) VALUES('$name','$email','$pas','$path')";
		$r=mysqli_query($con,$q);

		if($r)
		{
			echo "<script> alert('insert');</script>";
		}
		else{
			echo "<script> alert('error');</script>";
		}
	}
	else
	{
		echo "<script> alert('Image size error');</script>";
	}
}
?>