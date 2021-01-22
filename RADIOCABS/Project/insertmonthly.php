<?php
include('connect.php');
if(isset($_POST['monthlysubmit'])){

$quater=$_POST['month'];
$company_id=$_POST['compid'];
$date=$_POST['date'];

$q="insert into monthly(Month,CompID,Date) values('$quater','$company_id','$date')";
$res=mysqli_query($con,$q);
if($res){
echo "<script> alert('Data Inserted Successfully'); window.location.href='listmonthly.php';</script>";

}
else{
echo "sorry";
}

}

?>