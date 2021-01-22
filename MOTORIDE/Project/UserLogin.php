<?php
session_start();
include('dashboard/db.php');
if(isset($_POST["log"])){
  $name = $_POST["un"];
  $pass = $_POST["pd"];
  $que = "SELECT * FROM register WHERE User_name = '$name'";
  $ran = mysqli_query($con,$que);
  $data = mysqli_fetch_assoc($ran);
  $pas = $data['Pswrd'];
  if($pass == $pas){
     $_SESSION['ABC'] = $data['User_name'];
 $_SESSION['ABCD'] = $data['Id'];
    echo "<script> alert('Log In Successful!'); window.location.href = './index.php' </script>";
   
  }
  else{
    echo "<script> alert('Logged In Failed'); window.location.href = './Login.php' </script>";
  }
}
?>