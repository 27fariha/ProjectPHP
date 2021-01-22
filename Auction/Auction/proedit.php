

   


     <!------>
    
                 
              
      
<?php
if(isset($_POST['sub'])){
$f=$_POST["fname"];
$l=$_POST["lname"];
$c=$_POST["cnic"];
$e=$_POST["email"];

$DOB=$_POST["dob"];
$p=$_POST["pass"];
$cont=$_POST["con"];
$comp=$_POST["company"];

$file=$_FILES['img']['name'];
$filetemp=$_FILES['img']['tmp_name'];
$filesize=$_FILES['img']['size'];
$filetype=$_FILES['img']['type'];
$folder="image/";


    if(is_uploaded_file($_FILES['img']['tmp_name'])){
    if($filetype=="image/jpeg" || $filetype=="image/jpg" || $filetype=="image/png"){
      if($filesize<=1000000)  
      {
        $path= $folder.$file;
$path1= $folder1.$folder.$file;
$q="update users set FirstName='$f',LastName='$l',Cnic='$c',Email='$e',Image='$path',DateOfBirth='$DOB',Password='$p',Contact=$cont'',Company='$comp' where Id='$id'";
move_uploaded_file($filetemp,$path);
$result=mysqli_query($con,$q);
if($run){
  echo "<script>alert('user updated');window.location.href='profile.php';</script>";
}
else{
  echo mysqli_error($con);
}

}
else {
 echo "size error";
}
}
else {echo "filetype not correct";}
}

else{ 
  
  
  $run=mysqli_query($con,$q);
  if($run){
    $q="update users set FirstName='$f',LastName='$l',Cnic='$c',Email='$e',DateOfBirth='$DOB',Password='$p',Contact=$cont'',Company='$comp',RoleId='roid' where Id='$id'";
      echo "<script>alert('user updated');window.location.href='profile.php';</script>";
  }
  else{
      echo mysqli_error($con);
         }

}

}
?>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
                   .css( "visibility", "visible" );   
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>