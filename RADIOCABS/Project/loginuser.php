
<?php
include ('headerr.php');
?>
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
			<form action="" method="POST">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="uname" placeholder="Username" id="username" required>
				<br/>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
                <input type="password" name="pwd" placeholder="Password" id="password" required>
                
            <select name="sel" class="form-control">
                  
                    <option>Company</option>
                    <option>Driver</option>
				</select>

			
				<input type="submit" value="Login" name="login">
				<br/>
				<span><a href="login.php">Login As A Admin</a><span>
			</form>
		</div>
		</div>
		
	</body>
</html>
<?php
include ('footerr.php');
?>
<?php
include ('connect.php');

if(isset($_POST["login"]))
{
$name=$_POST['uname'];
$password=$_POST['pwd'];

if($_POST['sel']=='Driver')
{
$query="Select * from driver where Driver_Name='$name' ";
$run=mysqli_query($con,$query);
$data = mysqli_fetch_assoc($run);
$pwd= $data['Password'];
if($password==$pwd)
{
$_SESSION['Driver']= $data['Driver_Name'];
echo "<script>alert('Logged in');window.location.href='index.php';</script>";

}
else
{
	$_SESSION['Driver']= null;
	echo "<script>alert('Inncorrect Username Or Password');window.location.href='loginuser.php';</script>";

}
}
if($_POST['sel']=='Company')
{
	$query="Select * from company where Company_Name='$name' ";
	$run1=mysqli_query($con,$query);
	$data1 = mysqli_fetch_assoc($run1);
	$pwd= $data1['password'];
	if($password==$pwd)
	{
		$_SESSION['Company']= $data1['Company_Name'];
	echo "<script>alert('Logged in');window.location.href='index.php';</script>";

	}
	else
	{
		$_SESSION['Company']= null;
		echo "<script>alert('Inncorrect Username Or Password');window.location.href='loginuser.php';</script>";
	}
}

}

?>