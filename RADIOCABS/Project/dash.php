<?php session_start(); ?>
<?php
if($_SESSION['abc']==null)
{
  header('location:loginuser.php');
}
?>
<?php
include('dashboardHeader.php')
?>