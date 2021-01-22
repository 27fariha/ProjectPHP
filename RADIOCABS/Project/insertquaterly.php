<?php
include('connect.php');
if(isset($_POST['quaterlysubmit'])){

$quater=$_POST['quater'];
$company_id=$_POST['compid'];
$date=$_POST['date'];

$q="insert into quartly(Quater,CompID,Date) values('$quater','$company_id','$date')";
$res=mysqli_query($con,$q);
if($res){
echo "<script> alert('Data Inserted Successfully'); window.location.href='listquaterly.php';</script>";

}
else{
echo "sorry";
}

}

?>