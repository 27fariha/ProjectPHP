<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link href="login.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		
	</head>
	<body>
		
		<div class="login modal-fade modal-content">
		<div class="modal-header">
			<h1>Login</h1>
			<form action="" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="uname" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="pwd" placeholder="Password" id="password" required>
				<input type="submit" value="Login" name="login">
			</form>
		</div>
		</div>
		
	</body>
</html>

<?php
include ('connect.php');
session_start();

if(isset($_POST["login"]))
{
$name=$_POST['uname'];
$password=$_POST['pwd'];


$query="Select * from admin where username='$name' ";
$run2=mysqli_query($con,$query);
$data2 = mysqli_fetch_assoc($run2);
$pwd2= $data2['password'];
if($password==$pwd2)
{
echo "<script>alert('Logged in');window.location.href='dash.php';</script>";
$_SESSION['abc']= $data2['username'];
$_SESSION['abcs']= $data2['Id'];
}
else
{
	echo "<script>alert('Inncorrect Username Or Password');window.location.href='loginuser.php';</script>";
}
}




?>
