<?php

$con=mysqli_connect('localhost','root','','carbook');

if(!$con)
{
	$message='check connection';
	echo $message;
}

?>