
      <!-- End Navbar -->
  <!----for content-->
  <?php include('connection.php') ?>
  <?php
if(isset($_POST["save"]))
{
$ps=$_POST["sid"];
$pn=$_POST["pname"];
$d=$_POST["diss"];
$bit=$_POST["bid"];
$pd=$_POST["postdate"];
$cd=$_POST["closedate"];
$st=$_POST["status"];
$image = $_FILES['img']['name'];
$imgtn=$_FILES['img']['tmp_name'];
$imgty=$_FILES['img']['type'];
$imgsi=$_FILES['img']['size'];
$folder="image/";
if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jgpeg"){
if($imgsi<=1000000){
$path= $folder.$image;
$q="INSERT INTO `product`( `SellerId`, `ProductName`, `Description`, `Image`, `InitialBid`,  `DateOfPost`, `ClosingDate` , `Status`) VALUES ('$ps','$pn','$d','$path','$bit','$pd','$cd','$st')";
$result=mysqli_query($con,$q);
move_uploaded_file($imgtn,$path);
if($result)
{
echo "<script> alert('done'); window.location.href='ProductTable.php';</script>";
}
else
{
echo mysqli_error($con);
}
}
else{
echo "<script> alert('Image size error'); window.location.href='ProductTable.php';</script>";
}
}
else{
echo "<script> alert('Image format error'); </script>";
}
}
?>