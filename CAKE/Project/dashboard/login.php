<?php session_start();?>
<?php 
include('connect.php');
if(isset($_POST["btn"]))
{
  $name = $_POST["na"];
  $pass = $_POST["ps"];
  $que = "SELECT * FROM admin WHERE Username = '$name'";
  $run = mysqli_query($con,$que);
  $data = mysqli_fetch_assoc($run);
  $ps = $data['Password'];
  if($pass == $ps){
    $_SESSION['admin'] = $data['Name'];
    $_SESSION['admin1'] = $data['Image'];
$_SESSION['admin2'] = $data['Id'];	
    echo "<script> window.location.href = './admin.php' </script>";
  }
  else{
    echo "<script> alert('Sign in failed, wrong password!');  window.location.href = './signin.php' </script>";
  }
}
?>