<?php
include ('head.php');
include ('db.php');
 $id=$_GET['idd'];
$que="Delete from About where Id='$id'";
$rows = mysqli_query($con,$que);

if ($rows)
  	 {
  	 echo "<script>alert('Deleted');window.location.href='read_about.php';</script>";	
  	}
  	else
  	{
  		echo "Error";
  	}

?>