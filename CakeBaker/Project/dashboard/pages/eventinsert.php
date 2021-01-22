   <?php
         include('connect.php');
	if(isset($_POST["btn"]))
	{
	$n=$_POST["type"];
	{
	
	$q="insert into events(Event_Name) values('$n') ";
	$run=mysqli_query($con,$q);
	if($run){
	echo "<script> alert('Inserted'); window.location.href='event-view.php';</script>";
	}
	else{
	echo "<script> alert('insertion failed')</script>";
	}

	

}
}
?>