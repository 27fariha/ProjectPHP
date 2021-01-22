<?php 
session_start();
$_SESSION['ABC']=null;
echo "<script> alert('Logged out!'); window.location.href = './Login.php' </script>";
?>