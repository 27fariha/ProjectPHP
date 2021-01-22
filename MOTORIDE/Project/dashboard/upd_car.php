<?php session_start();?>
<?php
if($_SESSION['admin']==null){
  header('location:./AdminLogin.php');
}
?>
<?php
include ('head.php');
include ('db.php');
$id=$_GET['idd'];
$q="select * from cars where Id='$id'";
$rows = mysqli_query($con,$q);
$data = mysqli_fetch_assoc($rows);
?>
<form action="" method="POST">
	Picture: <br>
	<input type="text" name="pic" value="<?php  echo $data['Pic']; ?>">
	<br><br>
  Car Name: <br>
  <input type="text" name="mdl" value="<?php  echo $data['Car_name']; ?>">
  <br><br>
  Model Year: <br>
  <input type="text" name="mdl_y" value="<?php  echo $data['Model_year']; ?>">
  <br><br>
  Specification: <br>
  <input type="text" name="spec" value="<?php  echo $data['Specification']; ?>">
  <br><br>
  Company: <br>
  <input type="varchar" name="co" value="<?php  echo $data['Company']; ?>">
  <br><br>
  No Plate: <br>
  <input type="varchar" name="plt" value="<?php  echo $data['No_plate']; ?>">
  <br><br>
  Available: <br>
  <input type="varchar" name="avl" value="<?php  echo $data['Available']; ?>">
  <br><br>
  Price: <br>
  <input type="varchar" name="pr" value="<?php  echo $data['Price']; ?>">
  <br><br>
	<input type="submit" name="sub" value="Submit">
</form>

<?php
 if (isset($_POST['sub']))
  {
  	
    $pic = $_POST['mdl'];
    $mdl = $_POST['mdl'];
    $mdl_y = $_POST['mdl_y'];
    $spec = $_POST['spec'];
    $co = $_POST['co'];
    $plt = $_POST['plt'];
    $avl = $_POST['avl'];
    $pr = $_POST['pr'];

    $qu="update cars set Pic = '$pic',Car_name = '$mdl',Model_year = '$mdl_y',Specification = '$spec',Company = '$co',No_plate = '$plt',Available = '$avl',Price = '$pr' where Id = '$id'";
  	$res = mysqli_query($con,$qu);
  	if ($res)
  	 {
  	 echo "<script>alert('Updated');window.location.href='read_car.php';</script>";	
  	}
  	else
  	{
  		echo "Error";
  	} 	
 }
?>
