 <?php
  include('connect.php');
  if(isset($_POST["btn"]))
  {

  $b=$_POST["evt"];
  $c=$_POST["prd"];
  $d=$_POST["prc"];
$f=$_POST["itm"];
$g=$_POST["des"];
$h=$_POST["type"];
  $pimg = $_FILES['pic']['name'];
  $pimgtn=$_FILES['pic']['tmp_name'];
  $pimgty=$_FILES['pic']['type'];
  $pimgsi=$_FILES['pic']['size'];
  $folder="myimages/";
  if($pimgty=="image/png" || $pimgty=="image/jpg" || $pimgty=="image/jpeg")
  {
  if($pimgsi<=1000000)
  {
  $path= $folder . $pimg;
  move_uploaded_file($pimgtn,$path);
  $q="INSERT into product_details(Item_code,event_id_f,Product_name,Type,Image,Description,Price) values('$f','$b','$c','$h','$path','$g','$d') ";
  $run=mysqli_query($con,$q);
  if($run)
  {
    echo "<script> alert('Inserted');window.location.href='product-view.php'; </script>";
  }
  else
  {
  echo "<script> alert('Error');window.location.href='product-view.php'; </script>";
  }

  }


  else
  {
  echo "<script> alert('Image size error'); </script>";
  }


  }
  else
  {
  echo "<script> alert('Image format error'); </script>";
  }
    }
  ?>


