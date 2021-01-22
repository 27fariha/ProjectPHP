<?php
session_start();
include('./db.php');
if(isset($_POST["log"])){
  $name = $_POST["un"];
  $pass = $_POST["pd"];
  $que = "SELECT * FROM admin WHERE Name = '$name'";
  $ran = mysqli_query($con,$que);
  $data = mysqli_fetch_assoc($ran);
  $pas = $data['Pswrd'];
  if($pass == $pas){
    echo "<script> alert('Logged In'); window.location.href = './read_car.php' </script>";
    $_SESSION['admin'] = $data['Name'];
 $_SESSION['admin1']=$data['Id'];
  }
  else{
    echo "<script> alert('Logged In Failed'); window.location.href = './AdminLogin.php' </script>";
  }
}
?>