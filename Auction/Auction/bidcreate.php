<?php
include('connection.php');
if(isset($_POST["Submit"]))
{
$it=$_POST["it"];
$bi=$_POST["bId"];
$pi=$_POST["pid"];
$bp=$_POST["bpri"];
$dt=$_POST["dt"];
if($it<$bp)
{
$q="insert into bid(BuyerId,ProductId,BidPrice,Date) values ('$bi','$pi','$bp','$dt')";
$result=mysqli_query($con,$q);
if($result)
{
 echo "<script> window.location.href='buy.php';alert('done'); </script>";
/*header('Location:form.php');*/
}

else
{
echo mysqli_error($con);
}
}
else{
    echo "<script> alert('Insert greter amount than initial amount');window.location.href='buy.php'; </script>";
}



}
?>