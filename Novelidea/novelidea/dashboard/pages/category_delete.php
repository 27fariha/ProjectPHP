<?php
include('connection.php');

$y=$_GET['idd'];
$q="delete from category where Category_ID='$y'";
$ex=mysqli_query($con,$q);

if($ex){
header('location:category_read.php');
}

else{
echo "<script>alert('The record cannot be deleted');window.location.href='category_read.php';</script>";
}
?>