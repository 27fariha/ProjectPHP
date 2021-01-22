<?php 
$connection=mysqli_connect("localhost","root","","editing_ezyclick");
/*check connection*/
if(mysqli_connect_errno())
{
echo"Connection Fail". mysqli_connect_error();
}
?>