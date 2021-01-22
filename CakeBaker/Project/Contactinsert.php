<?php
         include('connect.php');
	if(isset($_POST["btn"]))
	{
    $n=$_POST["name"];
    $o=$_POST["email"];
    $p=$_POST["subject"];
    $q=$_POST["message"];
	{
	
	$q="insert into contact(Name,Email,Subject,Message) values('$n','$o','$p','$q') ";
	$run=mysqli_query($con,$q);
	if($run){
	echo "<script> alert('Thank you for contacting us, We will get back to you soon through your email'); window.location.href='contact.php';</script>";
	}
	else{
	echo "<script> alert('insertion failed'); window.location.href='contact.php'; </script>";
	}

	

}
}
?>