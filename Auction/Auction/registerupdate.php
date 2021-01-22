<?php
include('Header.php');

include('connection.php');
$id=$_SESSION['AUI'];
$q="select * from users where Id='$id'";
$run=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($run);




?>


      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
              <h1> Register Here</h1>
              <p>You can easily update your Profile.</p>
            
            </div>
          </div>
        </div>
      </div>


      <div class="site-section">
        <div class="container">
          
     <div class="row justify-content-center">

           <form action="" method="POST">

            <div class="col-lg-12">
              <h2 class="mb-5 text-black"><strong>Register</strong></h2>
              
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="fname">First Name</label>
                  <input type="text"  name="fname" id="fname"  placeholder="Your First Name" class="form-control form-control-lg" required>
                </div>
        
                <div class="col-md-6 form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" name="lname" id="lname" placeholder="Your Last Name" class="form-control form-control-lg" required>
                </div>
              </div>


              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="mail" >Email</label>
                  <input type="email" name="email" id="email"  placeholder="Your Email Address" class="form-control form-control-lg" required>
                </div>
              
                <div class="col-md-6 form-group">
                  <label for="password">Password</label>
                  <input type="password" name="pass" id="password"  placeholder="Enter Password" class="form-control form-control-lg" required>
                </div>
              </div>

         

           
           


             <!-- <div class="row">
                <div class="col-md-6 form-group">
                  <label for="image">Image </label>
                  <input type="file" name="im" id="image"  placeholder="Your Image" class="form-control form-control-lg" >
                </div>-->
                <div class="row">
                 <div class="col-md-6 form-group">
                  <label for="dateofbirth">Date-Of-Birth </label>
                  <input type="type" name="dob" id="dateofbirth" placeholder="Your Date-Of-Birth" class="form-control form-control-lg" required>
                 </div>
              

          
                 <div class="col-md-6 form-group">
                  <label for="nic">CNIC</label>
                  <input type="text" name="cnic" id="nic" placeholder="Your NIC" class="form-control form-control-lg" required>
                 </div>
                </div>

                <div class="row">
                <div class="col-md-6 form-group">
                  <label for="contact">Contact</label>
                  <input type="type" name="con" id="contact" placeholder="Your Contact Number" class="form-control form-control-lg" required>
                </div>
           
              


                
                 <div class="col-md-6 form-group">
                  <label for="company">Company</label>
                  <input type="text" name="company" id="company" placeholder="Your Company Name" class="form-control form-control-lg" required>
                </div>
                </div>
              

                   <div class="col-md-6">
                          <div>
                              <label>Image</label>
                              <br>
                              <input type="file"  name="img" onChange="readURL(this)"  required>
                                <img id="proimg" height='50' > </input>
                          </div>
                 </div>
              <div class="row">
                <div style="margin-left:220px;" class="col-3">
                  <input type="submit" name="sub" value="Register"  class="btn btn-primary btn-lg px-5">
                </div>
              </div>
            </div>    
            
             </form>
          </div>
        </div>
        </div>
      
      
      

     <?php
include('Footer.php')
?>

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
  echo "<script>alert('user updated');window.location.href='register.php';</script>";
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
      echo "<script>alert('user updated');window.location.href='register.php';</script>";
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