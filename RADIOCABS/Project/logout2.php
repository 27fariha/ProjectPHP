<?php
session_start();
$_SESSION['Company']= null;
	$_SESSION['Driver']= null;
echo "<script>alert('LOGGED OUT..!!!');window.location.href='index.php'</script>";
?>