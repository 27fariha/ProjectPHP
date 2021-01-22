<?php
include('connect.php');
$id=$_GET['id'];
$qu="Delete from admin where Id='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('Record Deleted');window.location.href='adminread.php'; </script>";
}
else{
echo mysqli_error($con);
}
?>