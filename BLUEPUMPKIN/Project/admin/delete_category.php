<?php
include('connect.php');
$iid=$_GET['Idd'];
$qq="delete from category where Id='$iid'";
$res=mysqli_query($con,$qq);
if($res){
echo "<script>alert('Record Deleted'); window.location.href='view_category.php'; </script>";
}
else{
echo "<script>alert('error');</script>";
}
?>