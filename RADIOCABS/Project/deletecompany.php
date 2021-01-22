<?php
include('connect.php');
$id=$_GET['Advertise_ID'];
$qu="Delete from company where Advertise_ID='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('deleted');window.location.href='listcompany.php'; </script>";
}
else{
echo "Error";
}
?>