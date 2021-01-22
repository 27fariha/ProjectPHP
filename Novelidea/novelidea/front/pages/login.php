<?php

include('header.php');

?>


<head>
	<link rel="stylesheet" type="text/css" href="../content_log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../content_log/fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="../content_log/css/util.css">
	<link rel="stylesheet" type="text/css" href="../content_log/css/main.css">
</head>

	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title p-b-49">
						Login
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
					
</br>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="sub" type="submit">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-8 p-b-31">
						<a href="signup_form.php">
							I dont have any account
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

<?php

include('footer.php');
include 'connection.php';
if(isset($_POST['sub']))
{
$mail=$_POST['email'];
$pass=$_POST['pass'];
$q="select * from members where Email='$mail' && Password='$pass'";
$run=mysqli_query($con,$q);
$f=mysqli_fetch_assoc($run);
$id=$f['Member_ID'];
$name=$f['Name'];
$card=$f['Card_Details'];
$subs=$f['Subscription_ID_F'];
$date=$f['Date_Registered'];
if($run)
{
	$row=mysqli_num_rows($run);
	if($row>0){
		$_SESSION['MAIL_U']=$mail;
		$_SESSION['ID_U']=$id;
		$_SESSION['NAME_U']=$name;
		$_SESSION['CARD_U']=$card;
		$_SESSION['SUBS_U']=$subs;
		$_SESSION['DATE_U']=$date;
		echo "<script>alert('Welcome $_SESSION[NAME_U] :)'); window.location.href='index.php'; </script>";
	}
	else{
		echo "<script>alert('Login Failed') </script>";
		}
}

}

?>