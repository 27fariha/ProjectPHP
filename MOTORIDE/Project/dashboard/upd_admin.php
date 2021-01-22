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
$q="select * from admin where Id='$id'";
$rows = mysqli_query($con,$q);
$data = mysqli_fetch_assoc($rows);
?>
<form action="" method="POST">
	Name: <br>
	<input type="text" name="abc" value="<?php  echo $data['Name']; ?>">
	<br><br>
  Email: <br>
  <input type="text" name="em" value="<?php  echo $data['email']; ?>">
  <br><br>
   Password: <br>
  <input type="text" name="pas" value="<?php  echo $data['Pswrd']; ?>">
  <br><br>
  <input type="submit" name="sub" value="Submit">
</form>

<?php
 if (isset($_POST['sub']))
  {
  	$name = $_POST['abc'];
    $e = $_POST['em'];
    $p = $_POST['pas'];
  	$qu="update admin set Name='$name',email='$e',Pswrd='$p' where Id = '$id'";
  	$res = mysqli_query($con,$qu);
  	if ($res)
  	 {
  	 echo "<script>alert('Updated');window.location.href='read_admin.php';</script>";	
  	}
  	else
  	{
  		echo "Error";
  	}
 	
 }

?>