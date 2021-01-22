<?php
    include('connection.php');
    if(isset($_POST['sub']))
    {
    $n=$_POST['name'];
    $du=$_POST['duration'];
    $c=$_POST['charges'];
    $de=$_POST['description'];

    $image=$_FILES['image']['name'];
    $imagetn=$_FILES['image']['tmp_name'];
    $imagety=$_FILES['image']['type'];
    $imagesi=$_FILES['image']['size'];
	$folderim="../images/";

$pathim=$folderim.$image;
move_uploaded_file($imagetn, $pathim);

    $q="insert into subscription(Subscription_Name,Duration,Charges,Description,Image) values('$n','$du','$c','$de','$pathim')";
    $res=mysqli_query($con,$q);
    if($res)
    {
    echo "
    <script>alert('Package Added');window.location.href='subscription_read.php'</script>";
    }
    else
    {
    echo "<script>alert('Package Creation Unsuccessful');'</script>";
    }	
}
else
{
    echo "<script>alert('Error occurred while submiting data')</script>";
}
    ?>