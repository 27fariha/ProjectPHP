<?PHP
include('connection.php');
if(isset($_POST['sub']))
{
$m=$_POST['email'];
$p=$_POST['pass'];
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$db=$_POST['dob'];
$ca=$_POST['company'];
$c=$_POST['con'];
$n=$_POST['cnic'];
$image=$_FILES['img']['name'];
$imgtn=$_FILES['img']['tmp_name'];
$imgty=$_FILES['img']['type'];
$imgsi=$_FILES['img']['size'];
$folder="image/";
$folder1="dashboard/pages/";
if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jpeg"){
if($imgsi<=1000000){
$path= $folder.$image;
$path1= $folder1.$folder.$image;

$q="insert into users(Firstname,Lastname,Cnic,Email,Image,DateOfBirth,Password,Contact,Company) 
values ('$fn','$ln','$n','$m','$path1','$db','$p','$c','$ca')";
$res=mysqli_query($con,$q);
move_uploaded_file($imgtn,$path1);

if($res){
echo "<script>alert('You Are Registered :)');window.location.href='login.php'</script>";
}
else{
echo "<script>alert('OOOppppss');</script>";
}
}
else{
echo "<script> alert('Image Size Error'); window.location.href='register.php';</script>";
    }
    }
else{
echo mysqli_error($con);
    }

}

?>