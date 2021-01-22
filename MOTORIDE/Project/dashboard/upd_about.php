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
$q="select * from About where Id='$id'";
$rows = mysqli_query($con,$q);
$data = mysqli_fetch_assoc($rows);
?>
 
<form action="" method="POST">
	Name: <br>
	<input type="text" name="abc" value="<?php  echo $data['User_name']; ?>">
	<br><br>
	<input type="submit" name="sub" value="Submit">
</form>

<?php
 if (isset($_POST['sub']))
  {
  	$name = $_POST['abc'];
  	$qu="update about set User_name ='$name' where Id = '$id'";
  	$res = mysqli_query($con,$qu);
  	if ($res)
  	 {
  	 echo "<script>alert('Updated');window.location.href='read_about.php';</script>";	
  	}
  	else
  	{
  		echo "Error";
  	} 	
 }
?>
