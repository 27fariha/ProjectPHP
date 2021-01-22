<?php
         include('connect.php');
	if(isset($_POST["btn"]))
	{
    $n=$_POST["name"];
	$o=$_POST["email"];
	$p=$_POST["password"];
    $q=$_POST["contact"];
    
	{
	
	$q="insert into customer_details(Name,Email,Password,Contact) values('$n','$o','$p','$q') ";
	$run=mysqli_query($con,$q);
	if($run){
	echo "<script> alert('Your account has been created'); window.location.href='index.php';</script>";
	}
	else{
	echo "<script> alert('insertion failed'); window.location.href='signup.php'; </script>";
	}

	

}
}
?>