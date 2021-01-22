<?php
include('connection.php');
$x=$_GET['idd'];
$q="delete from bid where Id='$x'";
$ex=mysqli_query($con,$q);
if($ex){
echo "<script>alert('Deleted');window.location.href='BidTable.php';</script>";
}
else{
echo mysqli_error($con);
}
?>