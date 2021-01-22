<?php
include('connection.php');
if(isset($_POST["Submit"]))
{

$n=$_POST["bd"];
$q="insert into auctionsuccess(bidId) values ('$n')";
$result=mysqli_query($con,$q);
if($result)
{
echo "<script> alert('done'); window.location.href='Auction_Success.php';</script>";
;
/*header('Location:form.php');*/
}

else
{
echo mysqli_error($con);

}

}
?>

      