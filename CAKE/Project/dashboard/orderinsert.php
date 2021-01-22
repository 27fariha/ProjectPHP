 <?php
  include('connect.php');
  if(isset($_POST["btn"]))
  {

  $a=$_POST["Name"];
  $b=$_POST["Address"];
  $c=$_POST["Contact"];
  $d=$_POST["ItemCode"];
$e=$_POST["Quantity"];
$f=$_POST["Delivery_address"];
$g=$_POST["Delivery_date"];
  
 
  $q="INSERT into order(Name,Address,Contact,itemcode,Quantity,Delivery_address,Delivery_date) values($a','$b','$c','$d','$e','$f','$g') ";
  $run=mysqli_query($con,$q);
  if($run)
  {
    echo "<script> alert('Inserted');window.location.href='orderread.php'; </script>";
  }
  else
  {
  echo "<script> alert('Error');window.location.href='orderread.php'; </script>";
  }

  }

  ?>


