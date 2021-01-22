<?php
include('connect.php');
$id=$_GET['id'];
$qu="Delete from catagory where Id='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('Record Deleted');window.location.href='catagoryread.php'; </script>";
}
else{
echo "Error";
}
?>