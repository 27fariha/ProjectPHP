<?php
include('connection.php');
if(isset($_POST["Submit"]))
{

$f=$_POST["fn"];
$l=$_POST["ln"];
$c=$_POST["cn"];
$e=$_POST["em"];

$DOB=$_POST["dob"];
$p=$_POST["pd"];
$cont=$_POST["con"];
$comp=$_POST["com"];

$image = $_FILES['im']['name'];
$imgtn=$_FILES['im']['tmp_name'];
$imgty=$_FILES['im']['type'];
$imgsi=$_FILES['im']['size'];
$folder="image/";
if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jgpeg"){
if($imgsi<=1000000){
$path= $folder.$image;
$q="insert into users(FirstName,LastName,Cnic,Email,Image,DateOfBirth,Password,Contact,Company) values ('$f','$l','$c','$e','$path','$DOB','$p','$cont','$comp')";
$result=mysqli_query($con,$q);
move_uploaded_file($imgtn,$path);
if($result)
{
echo "<script> alert('done'); window.location.href='UserTable.php';</script>";
}
else
{
echo mysqli_error($con);
}
}
else{
echo "<script> alert('Image size error'); window.location.href='UserTable.php';</script>";
}
}
else{
echo "<script> alert('Image format error'); </script>";
}
}
?>
