<?php
include('connect.php');
$iid=$_GET['Idd'];
$qq="delete from winner where Id='$iid'";
$res=mysqli_query($con,$qq);
if($res){
echo "<script>alert('Record Deleted'); window.location.href='view_winners.php'; </script>";
}
else{
echo "<script>alert('error');</script>";
}
?>