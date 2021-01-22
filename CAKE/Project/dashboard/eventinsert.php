   <?php
         include('connect.php');
	if(isset($_POST["btn"]))
	{
	$n=$_POST["type"];
	{
	
	$q="insert into event(type) values('$n') ";
	$run=mysqli_query($con,$q);
	if($run){
	echo "<script> alert('Inserted'); window.location.href='eventread.php';</script>";
	}
	else{
	echo "<script> alert('insertion failed')</script>";
	}

	

}
}
?>