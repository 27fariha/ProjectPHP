<?php
include('connection.php');

$y=$_GET['idd'];
$q="delete from books where Book_ID='$y'";
$ex=mysqli_query($con,$q);

if($ex){
header('location:books_read.php');
}

else{
echo "<script>alert('The record cannot be deleted');window.location.href='books_read.php';</script>";
}
?>