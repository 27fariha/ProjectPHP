<?php session_start();?>
<?php
if($_SESSION['admin']==null){
	header('location:./AdminLogin.php');
}
?>
<?php
include ('head.php');


?>

				<h4 class="page-title">Register</h4>
				<div class="row">		
				</div>
				<form method="POST" action="">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Form Control Styles <button><a href="./Logout.php">Log Out</a></button></div>
						</div>

						<div class="card-body">

							<div class="form-group">
								<label for="largeInput">User Name</label>
								<input name="name" type="text" class="form-control form-control" id="defaultInput" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="largeInput">Email</label>
								<input name="email" type="email" class="form-control form-control" id="defaultInput" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="largeInput">Password</label>
								<input name="pwd" type="Password" class="form-control form-control" id="defaultInput" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="largeInput">Cnic</label>
								<input name="cnic" type="text" class="form-control form-control" id="defaultInput" placeholder="Cnic No">
							</div>
							<div class="form-group">
								<label for="largeInput">Contact</label>
								<input name="contact" type="text" class="form-control form-control" id="defaultInput" placeholder="Contact">
							</div>


						</div>

						<div class="card-action">
							<button class="btn btn-success" name="sub">Submit</button>
							<button class="btn btn-danger">Cancel</button>
						</div>
					</div>
				</form>



			</div>

		</div>

	</div>
</div>
<?php
include 'footer.php';
?>

<?php
$con=mysqli_connect('localhost','root','','carbook');

if($con)
{
	echo 'done';
}
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['pwd'];
	$cnic=$_POST['cnic'];
	$contact=$_POST['contact'];

	$q="INSERT into register (User_name,email,Pswrd,cnic,contact) VALUES ('$name','$email','$password','$cnic','$contact')";
	$r=mysqli_query($con,$q);

	if($r)
	{
		$mesg="insert";
		echo $mesg;
	}
	else{
		$msg="not";
		echo $msg;
	}

}


?>