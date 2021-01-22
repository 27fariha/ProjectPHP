<?php
include('connection.php');

$y=$_GET['idd'];
$q="delete from admin where Admin_ID='$y'";
$ex=mysqli_query($con,$q);

if($ex){
header('location:admin_read.php');
}

else{
echo "<script>alert('The record cannot be deleted');window.location.href='admin_read.php';</script>";
}
?>