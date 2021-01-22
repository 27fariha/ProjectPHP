<?php
include('connect.php');
$id=$_GET['id'];
$qu="Delete from customer_details where Id='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('Record Deleted');window.location.href='customer-view.php'; </script>";
}
else{
echo "Error";
}
?>