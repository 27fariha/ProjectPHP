 <?php
 session_start();
 include('connection.php') ;
 ?>
  <?php


if(isset($_POST['NOT'])){
  echo "<script> alert('Sorry You Have To Login First'); window.location.href='login.php';</script>";        
}


if(isset($_POST["save"]))
{

$ps=$_SESSION['AUI'];
$pn=$_POST["pname"];
$d=$_POST["diss"];
$bit=$_POST["bid"];
$pd=date("Y-m-d");
$cd=$_POST["closedate"];
$st='pending';
$image = $_FILES['img']['name'];
$imgtn=$_FILES['img']['tmp_name'];
$imgty=$_FILES['img']['type'];
$imgsi=$_FILES['img']['size'];
$folder="image/";
$folder1="dashboard/pages/";
if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jpeg"){
if($imgsi<=1000000){
$path= $folder.$image;
$path1= $folder1.$folder.$image;
$q="INSERT INTO `product`( `SellerId`, `ProductName`, `Description`, `Image`, `InitialBid`,  `DateOfPost`, `ClosingDate` , `Status`) 
VALUES ('$ps','$pn','$d','$path1','$bit','$pd','$cd','$st')";
$result=mysqli_query($con,$q);
move_uploaded_file($imgtn,$path1);
if($result)
{
echo "<script> alert('Your Product Has Been Inserted'); window.location.href='index.php';</script>";
}
else if($ps==null)
{
echo "<script> alert('Sorry You Have To Login First'); window.location.href='login.php';</script>";                            
}
}
else{
echo "<script> alert('Image Size Error'); window.location.href='sell.php';</script>";
}
}
else{
echo "<script> alert('Image Format Error'); </script>";
}

}
?>