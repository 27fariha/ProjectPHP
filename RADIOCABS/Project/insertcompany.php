<?php session_start(); ?>
<?php
if($_SESSION['abc']==null)
{
  header('location:login.php');
}
?>
<?php
include('connect.php');
if(isset($_POST['companysubmit'])){

$name=$_POST['companyname'];

$desi=$_POST['designation'];
$addr=$_POST['address'];
$mob=$_POST['mobile'];
$tel=$_POST['telephone'];
$faxno=$_POST['faxnumber'];
$email=$_POST['email'];
$des=$_POST['description'];
$pay=$_POST['payment'];
$mem=$_POST['member'];
$pwd=$_POST['pass'];
$image = $_FILES['image']['name'];
$imgtn=$_FILES['image']['tmp_name'];
$imgty=$_FILES['image']['type'];
$imgsi=$_FILES['image']['size'];
$folder="myimages/";
if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jpeg")
{
if($imgsi<=1000000){
$path= $folder . $image;
move_uploaded_file($imgtn,$path);

$q="INSERT INTO company(Company_Name,Logo,Designation,Address,Mobile,Telephone,Fax_Number,Email,Description,Membership,Payment,password) values('$name','$path','$desi','$addr','$mob','$tel','$faxno','$email','$des','$mem','$pay','$pwd')";
$res=mysqli_query($con,$q);
if($res){
    echo "<script> alert('Inserted'); window.location.href='index.php';</script>";
}
else{
echo "<script> alert('insertion failed'); window.location.href='';</script>";
}

}


else
{
echo "<script> alert('Image size error'); window.location.href='';</script>";
}


}

else{
echo "<script> alert('Image format error'); window.location.href='';</script>";
}
}
?>