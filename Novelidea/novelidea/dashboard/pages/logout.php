<?php session_start();
if($_SESSION["ID"]!=null)
{
	session_destroy();
  header('location:login.php');
}
?>