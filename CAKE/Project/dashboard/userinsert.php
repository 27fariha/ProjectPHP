<?php
include('connect.php');
if(isset($_POST["btn"]))
{
$a=$_POST["name"];
$b=$_POST["uname"];
$c=$_POST["email"];
$g=$_POST["password"];
$query="insert into user(Name,Username,Email,Password) values ('$a','$b','$c','$g')";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('done'); </script>";
}
else
{
echo "retry";
}
}
?>