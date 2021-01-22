<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login | A Novel Idea Library</title>

	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title p-b-49">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Type your Email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login" type="submit">
								Login
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>	


</body>
</html>

<?php
include 'connection.php';
if(isset($_POST['login']))
{
$mail=$_POST['email'];
$pass=$_POST['pass'];
$q="select * from admin where Email='$mail' && Password='$pass'";
$run=mysqli_query($con,$q);
$f=mysqli_fetch_assoc($run);
$id=$f['Admin_ID'];
$name=$f['Name'];
$img=$f['Image'];
if($run)
{
	$row=mysqli_num_rows($run);
	if($row>0){
		$_SESSION['MAIL']=$mail;
		$_SESSION['ID']=$id;
		$_SESSION['NAME']=$name;
		$_SESSION['IMAGE']=$img;
		echo "<script> window.location.href='index.php'</script>";

	}
	else{
		echo "<script>alert('Login Failed') </script>";
		}
}

}


?>