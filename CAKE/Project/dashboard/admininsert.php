

<?php
include('connect.php');
if(isset($_POST["btn"]))
{

$n=$_POST["name"];
$u=$_POST["uname"];
$e=$_POST["email"];
$p=$_POST["password"];
$image = $_FILES['image']['name'];
$imgtn=$_FILES['image']['tmp_name'];
$imgty=$_FILES['image']['type'];
$imgsi=$_FILES['image']['size'];
$folder="myimages/";
if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jpeg")
{
if($imgsi<=1000000)
{
$path= $folder . $image;
move_uploaded_file($imgtn,$path);
$q="INSERT into admin(Name,Username,Email,Password,Image) values('$n','$u','$e','$p','$path') ";
$run=mysqli_query($con,$q);
if($run){
echo "<script> alert('Inserted'); </script>";
}
else{
echo "<script> alert('insertion failed'); </script>";
}

}


else
{
echo "<script> alert('Image size error'); </script>";
}


}

else{
echo "<script> alert('Image format error'); </script>";
}
}
?>















