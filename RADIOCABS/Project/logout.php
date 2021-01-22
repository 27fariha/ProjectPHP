<?php
session_start();
$_SESSION['Company']=null;
echo "<script>alert('LOGGED OUT..!!!');window.location.href='login.php'</script>";
?>