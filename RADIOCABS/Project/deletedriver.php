<?php
include('connect.php');
$id=$_GET['Driver_ID'];
$qu="Delete from driver where Driver_ID='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('deleted');window.location.href='listdriver.php'; </script>";
}
else{
echo "Error";
}
?>