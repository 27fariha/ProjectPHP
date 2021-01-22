 <?php
  include('connect.php');
  if(isset($_POST["btn"]))
  {

  $a=$_POST["cat"];
  $b=$_POST["eve"];
  $c=$_POST["Cakename"];
  $d=$_POST["Price"];
$e=$_POST["sel"];
$f=$_POST["ptype"];
$g=$_POST["ItemCode"];
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
  $q="INSERT into product(Cid,eid,Cake_name,Price,Available,type,itemcode,image) values('$a','$b','$c','$d','$e','$f','$g','$path') ";
  $run=mysqli_query($con,$q);
  if($run)
  {
    echo "<script> alert('Inserted');window.location.href='productread.php'; </script>";
  }
  else
  {
  echo "<script> alert('Error');window.location.href='productread.php'; </script>";
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


