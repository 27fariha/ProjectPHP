   <?php
         include('connect.php');
	if(isset($_POST["btn"]))
	{
	$n=$_POST["catagory"];
	{
	
	$q="insert into catagory(catagory) values('$n') ";
	$run=mysqli_query($con,$q);
	if($run){
	echo "<script> alert('Inserted'); window.location.href='catagoryread.php';</script>";
	}
	else{
	echo "<script> alert('insertion failed')</script>";
	}
}
}
?>

























