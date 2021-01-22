<?php
         include('connect.php');
	if(isset($_POST["btn"]))
	{
    $n=$_POST["name"];
    $o=$_POST["email"];
    $p=$_POST["contact"];
    
	{
	
	$q="insert into contact(Name,Email,Contact) values('$n','$o','$p') ";
	$run=mysqli_query($con,$q);
	if($run){
	echo "<script> alert('Inserted'); window.location.href='singup.php';</script>";
	}
	else{
	echo "<script> alert('insertion failed'); window.location.href='signup.php'; </script>";
	}

	

}
}
?>