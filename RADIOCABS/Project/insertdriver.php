<?php
include('connect.php');
if(isset($_POST['driversubmit'])){

$name=$_POST['drivername'];
$pass=$_POST['password'];
$contper=$_POST['contactperson'];
$add=$_POST['address'];
$city=$_POST['city'];
$mob=$_POST['mobile'];
$tel=$_POST['telephone'];
$email=$_POST['email'];
$exp=$_POST['experience'];
$des=$_POST['description'];
$pay=$_POST['payment'];

$q="insert into driver(Driver_Name,Password,Contact_Person,Address,City,Mobile,Telephone,Email,Experience,Description,Payment) values('$name','$pass','$contper','$add','$city','$mob','$tel','$email','$exp','$des','$pay')";
$res=mysqli_query($con,$q);
if($res){
echo "<script> alert('Data Inserted Successfully'); window.location.href='index.php';</script>";

}
else{
echo "sorry";
}

}

?>