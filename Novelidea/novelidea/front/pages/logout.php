<?php session_start();
if($_SESSION["ID_U"]!=null)
{
  session_start(); 
  session_destroy();
  if(isset($_SERVER['HTTP_REFERER'])) {
   header('Location: '.$_SERVER['HTTP_REFERER']);  
  } else {
   header('Location: index.php');  
  }
  exit; 
}
?>