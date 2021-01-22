<?php
include('connect.php');
if(isset($_POST['feedbacksubmit'])){

$name=$_POST['name'];
$mob=$_POST['mobile'];
$email=$_POST['email'];
$city=$_POST['city'];
$type=$_POST['type'];
$des=$_POST['description'];

$q="insert into feedback(Name,Mobile_Number,Email,City,Feedback_Type,Description) values('$name','$mob','$email','$city','$type','$des')";
$res=mysqli_query($con,$q);
if($res){
echo "<script> alert('Data Inserted Successfully'); window.location.href='index.php';</script>";

}
else{
echo "sorry";
}

}

?>