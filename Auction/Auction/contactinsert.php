<?PHP
include('connection.php');
if(isset($_POST['sub']))
{
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$m=$_POST['mess'];
$t=$_POST['tel'];
$ma=$_POST['mail'];
$q="insert into contact(FirstName,LastName,Email,TelNum,Message) values ('$fn','$ln','$m','$t','$ma')";
$res=mysqli_query($con,$q);
if($res){
echo "<script>alert('Inserted');window.location.href='contact.php'</script>";

}
else{

echo "none";
}


}







?>