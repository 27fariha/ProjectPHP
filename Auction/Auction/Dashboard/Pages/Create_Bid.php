<?php
include('connection.php');
if(isset($_POST["Submit"]))
{

$bi=$_POST["bId"];
$pi=$_POST["pid"];
$bp=$_POST["bpri"];
$dt=$_POST["dte"];
$q="insert into bid(BuyerId,ProductId,BidPrice,Date) values ('$bi','$pi,'$bp','$dt')";
$result=mysqli_query($con,$q);
if($result)
{
echo "<script> window.location.href='Bid.php';alert('done'); 
</script>"
;
/*header('Location:form.php');*/
}

else
{
echo mysqli_error($con);

}

}
?>



