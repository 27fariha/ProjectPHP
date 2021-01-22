<?php 
session_start();
session_destroy();
echo "<script> alert('Signed out!'); window.location.href = './signin.php' </script>";
?>