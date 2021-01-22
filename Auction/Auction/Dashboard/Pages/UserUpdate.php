<?php
include('connection.php');
$id=$_GET['idd'];
$q="select * from users where Id='$id'";
$run=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($run);


?>




  <?php
include('header.php') ?>
   
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title"></h5>
              </div>
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    
                    
                      <div class="col-md-6 px-1">
                          <div class="form-group">
                              <label>First Name</label>
 <input type="text" class="form-control" placeholder="" name="fn" value="<?php echo $data['FirstName']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 px-1">
                          <div class="form-group">
                              <label>Last Name</label>
 <input type="text" class="form-control" placeholder="" name="ln" value="<?php echo $data['LastName']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 px-1">
                          <div class="form-group">
                              <label>cnic</label>
 <input type="text" class="form-control" placeholder="" name="cn" value="<?php echo $data['Cnic']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 px-1">
                          <div class="form-group">
                              <label>Emails</label>
 <input type="text" class="form-control" placeholder="" name="em" value="<?php echo $data['Email']; ?>">
                          </div>
                      </div>

                              <div class="col-md-6 px-1">
                          <div class="form-group">
                              <label>Date Of Birth</label>
 <input type="text" class="form-control" placeholder="" name="dob" value="<?php echo $data['DateOfBirth']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 px-1">
                          <div class="form-group">
                              <label>password</label>
 <input type="text" class="form-control" placeholder="" name="pd" value="<?php echo $data['Password']; ?>">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>contact</label>
 <input type="text" class="form-control" placeholder="" name="con" value="<?php echo $data['Contact']; ?>">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>company</label>
 <input type="text" class="form-control" placeholder="" name="com" value="<?php echo $data['Company']; ?>">
                          </div>
                      </div>

                     
					
                      
                     <div>
                              <label>Image</label><br>
 <input type="file" name="file1"  onChange="readURL(this)" >
 <img src="<?php echo $data['Image']; ?>" height=100 id="proimg">

                          </div>
                      </div>
                    
                    
                  </div>
                    <div class="col-md-12 px-1">
                          <div class="form-group">
                            
<input type="Submit" class="form-control" placeholder="" name="Submit">
                          </div>
                      </div>
                </form>
              </div>
            </div>
          </div>

          <!--<div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title">Mike Andrew</h5>
                  </a>
                  <p class="description">
                    michael24
                  </p>
                </div>
                <p class="description text-center">
                  "Lamborghini Mercy <br>
                  Your chick she so thirsty <br>
                  I'm in that two seat Lambo"
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>-->
        </div>
      </div>
        <?php
include('footer.php') ?>


<?php
if(isset($_POST['Submit'])){
$f=$_POST["fn"];
$l=$_POST["ln"];
$c=$_POST["cn"];
$e=$_POST["em"];

$DOB=$_POST["dob"];
$p=$_POST["pd"];
$cont=$_POST["con"];
$comp=$_POST["com"];

$file=$_FILES['file1']['name'];
$filetemp=$_FILES['file1']['tmp_name'];
$filesize=$_FILES['file1']['size'];
$filetype=$_FILES['file1']['type'];
$folder="image/";
    if(is_uploaded_file($_FILES['file1']['tmp_name'])){
    if($filetype=="image/jpeg" || $filetype=="image/jpg" || $filetype=="image/png"){
      if($filesize<=1000000)  
      {
        $path=$folder.$file;
$q="update users set FirstName='$f',LastName='$l',Cnic='$c',Email='$e',Image='$path',DateOfBirth='$DOB',Password='$p',Contact=$cont'',Company='$comp' where Id='$id'";
move_uploaded_file($filetemp,$path);
$result=mysqli_query($con,$q);
if($run){
  echo "<script>alert('user updated');window.location.href='UserTable.php';</script>";
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
    $q="update users set FirstName='$f',LastName='$l',Cnic='$c',Email='$e',DateOfBirth='$DOB',Password='$p',Contact=$cont'',Company='$comp' where Id='$id'";
      echo "<script>alert('user updated');window.location.href='UserTable.php';</script>";
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
