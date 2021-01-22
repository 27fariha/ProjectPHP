<?php
include('connect.php');
$id=$_GET['ID'];
$qu="Delete from quaterly where ID='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('deleted');window.location.href='listquaterly.php'; </script>";
}
else{
echo "Error";
}
?>