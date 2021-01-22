<?PHP
include('connection.php');

$bid=$_GET['bidd'];
$q="select * from bid where Id='$bid'";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);
$p=$data['ProductId'];
$q1="insert into auctionsuccess(bidId) values ('$bid')";
$res1=mysqli_query($con,$q1);
$q2="UPDATE `product` SET `status`='sold' where Id='$p'";
$res2=mysqli_query($con,$q2);

if($res){
echo "<script>alert('Product Sold');window.location.href='Index.php'</script>";

}
else{

echo "none";
}










?>