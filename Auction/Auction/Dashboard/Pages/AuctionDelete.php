<?php
include('connection.php');
$x=$_GET['idd'];
$q="delete from auctionsuccess where Id='$x'";
$ex=mysqli_query($con,$q);
if($ex){
echo "<script>alert('Deleted');window.location.href='AuctionTable.php';</script>";
}
else{
echo mysqli_error($con);
}
?>