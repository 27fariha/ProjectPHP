<?php
    include('connection.php');
    if(isset($_POST['sub']))
    {
    $n=$_POST['name'];
    $g=$_POST['gender'];
    $e=$_POST['email'];
    $p=$_POST['password'];

    $image=$_FILES['image']['name'];
    $imagetn=$_FILES['image']['tmp_name'];
    $imagety=$_FILES['image']['type'];
    $imagesi=$_FILES['image']['size'];
	$folderim="../images/";

$pathim=$folderim.$image;
move_uploaded_file($imagetn, $pathim);

    $q="insert into admin(Name,Gender,Image,Email,Password) values('$n','$g','$pathim','$e','$p')";
    $res=mysqli_query($con,$q);
    if($res)
    {
    echo "
    <script>alert('Admin Created');window.location.href='admin_read.php'</script>";

    }
    else
    {
    echo "<script>alert('Profile Creation Unsuccessful');'</script>";
    }
}
else
{
    echo "<script>alert('Error occurred while submiting data')</script>";
}
    ?>