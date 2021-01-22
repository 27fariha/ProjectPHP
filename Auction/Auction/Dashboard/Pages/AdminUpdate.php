 <?php
include('connection.php');
$id=$_GET['idd'];
$q="select * from admin where Id='$id'";
$run=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($run);


?>
<?php
include('header.php');
?>



  
      <!-- Navbar -->
 
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
                    
                    
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>User name</label>
 <input type="text" class="form-control" placeholder="" name="un" value="<?php echo $data['UserName']; ?>">
                          </div>
                      </div>

                       <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Password</label>
 <input type="text" class="form-control" placeholder="" name="ps" value="<?php echo $data['Password']; ?>">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Address</label>
 <input type="text" class="form-control" placeholder="" name="ad" value="<?php echo $data['Address']; ?>">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Email</label>
 <input type="text" class="form-control" placeholder="" name="em" value="<?php echo $data['Email']; ?>">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Number</label>
 <input type="text" class="form-control" placeholder="" name="phone" value="<?php echo $data['Phone']; ?>">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div >
                              <label>Image</label>
 <input type="file" placeholder="" name="file1" value="<?php echo $data['Image']; ?>">
                          </div>
                      </div>
					
                      
                    
                    
                  </div>
                    <div class="col-md-12 px-1">
                          <div class="form-group">
                            
<input type="Submit" class="form-control" placeholder="Admin" name="Submit">
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
$u=$_POST['un'];
$p=$_POST['ps'];
$a=$_POST['ad'];
$e=$_POST['em'];
$ph=$_POST['phone'];

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
$q="update admin set UserName='$u',Password='$p', Address='$a', Email='$e', Phone='$ph' Image='$path' where Id='$id'";
       move_uploaded_file($filetemp,$path);
       $run=mysqli_query($con,$q);
       if($run){
           echo "<script>alert('Admin updated');window.location.href='AdminTable.php';</script>";
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
$q="update admin set UserName='$u',Password='$p' ,Address='$a', Email='$e', Phone='$ph' where Id='$id'";
       $run=mysqli_query($con,$q);
       if($run){
           echo "<script>alert('Admin updated');window.location.href='AdminTable.php';</script>";
       }
       else{
           echo mysqli_error($con);
              }
  
  }

}
