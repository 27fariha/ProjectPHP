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
$q="select * from rentcar where Id='$id'";
$rows = mysqli_query($con,$q);
$data = mysqli_fetch_assoc($rows);
?>

<form action="" method="POST">
	Duration: <br>
	<input type="text" name="dur" value="<?php  echo $data['Duration']; ?>">
	<br><br>
  Date: <br>
  <input type="text" name="date" value="<?php  echo $data['Date']; ?>">
  <br><br>
  Price: <br>
  <input type="text" name="pr" value="<?php  echo $data['Price']; ?>">
  <br><br>
	<input type="submit" name="sub" value="Submit">
</form>

<?php
 if (isset($_POST['sub']))
  {
  	$du = $_POST['dur'];
    $d = $_POST['date'];
    $p = $_POST['pr'];
  	$qu="update rentcar set Duration ='$du',Date ='$d',Price ='$p' where Id = '$id'";
  	$res = mysqli_query($con,$qu);
  	if ($res)
  	 {
  	 echo "<script>alert('Updated');window.location.href='read_rent.php';</script>";	
  	}
  	else
  	{
  		echo "Error";
  	} 	
 }
?>
