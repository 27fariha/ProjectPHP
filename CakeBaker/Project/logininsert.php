<?php session_start();?>
<?php 
include('connect.php');
if(isset($_POST["btn"]))
{
  $name = $_POST["email"];
  $pass = $_POST["password"];
  $que = "SELECT * FROM customer_details WHERE Email = '$name'";
  $run = mysqli_query($con,$que);
  $data = mysqli_fetch_assoc($run);
  $ps = $data['password'];
  if($pass == $ps){
    $_SESSION['user'] = $data['Name'];
$_SESSION['user2'] = $data['Id'];	
    echo "<script> window.location.href = 'index.php' </script>";
  }
  else{
    echo "<script> alert('Sign in failed, Try again!');  window.location.href = 'login.php' </script>";
  }
}
?>