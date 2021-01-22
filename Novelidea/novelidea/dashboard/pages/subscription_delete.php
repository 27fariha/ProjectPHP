<?php
include('connection.php');

$y=$_GET['idd'];
$q="delete from subscription where Subscription_ID='$y'";
$ex=mysqli_query($con,$q);

if($ex){
header('location:subscription_read.php');
}

else{
echo "<script>alert('The record cannot be deleted');window.location.href='subscription_read.php';</script>";
}
?>