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
$q="select * from salecar where Id='$id'";
$rows = mysqli_query($con,$q);
$data = mysqli_fetch_assoc($rows);
?>

<form action="" method="POST">
	Date: <br>
	<input type="text" name="date" value="<?php  echo $data['Date']; ?>">
	<br><br>
  Deliverable: <br>
  <input type="text" name="del" value="<?php  echo $data['Deliverable']; ?>">
  <br><br>
  Price: <br>
  <input type="text" name="pr" value="<?php  echo $data['Price']; ?>">
  <br><br>
	<input type="submit" name="sub" value="Submit">
</form>

<?php
 if (isset($_POST['sub']))
  {
  	$d = $_POST['date'];
    $del = $_POST['del'];
    $p = $_POST['pr'];
  	$qu="update salecar set Date ='$d',Deliverable ='$del',Price ='$p' where Id = '$id'";
  	$res = mysqli_query($con,$qu);
  	if ($res)
  	 {
  	 echo "<script>alert('Updated');window.location.href='read_sale.php';</script>";	
  	}
  	else
  	{
  		echo "Error";
  	} 	
 }
?>
