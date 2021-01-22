<?php
include('connection.php');
$x=$_GET['idd'];
$q="delete from users where Id='$x'";
$ex=mysqli_query($con,$q);
if($ex){
echo "<script>alert('Deleted');window.location.href='UserTable.php';</script>";
}
else{
echo mysqli_error($con);
}
?>