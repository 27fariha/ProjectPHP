<?php session_start();?>
<?php 
include('connect.php');
if(isset($_POST["btn"]))
{
  $name = $_POST["username"];
  $pass = $_POST["password"];

  $que = "SELECT * FROM admin WHERE User_name = '$name'";
  $run = mysqli_query($con,$que);
  $data = mysqli_fetch_assoc($run);
  $ps = $data['Password'];
 if($pass == $ps ){
    $_SESSION['admin'] = $data['User_name'];
$_SESSION['admin2'] = $data['Id'];	
    echo "<script> window.location.href = 'index.php' </script>";
  }
  else{
    echo "<script> alert('Sign in failed, wrong password!');  window.location.href = 'login.php' </script>";
  }
}
?>