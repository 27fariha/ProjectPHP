<?php
include('connect.php');
$id=$_GET['id'];
$qu="Delete from order where Id='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('Record Deleted');window.location.href='irderread.php'; </script>";
}
else{
echo "Error";
}
?>