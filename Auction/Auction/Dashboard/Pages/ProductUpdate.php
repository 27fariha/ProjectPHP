<?php
include('connection.php');
$id=$_GET['idd'];
$q="select * from product where Id='$id'";
$run=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($run);


?>




<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
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
                    
                    
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Seller id</label>
 <input type="text" class="form-control" placeholder="" name="sid" value="<?php echo $data['SellerId']; ?>">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Product names</label>
 <input type="text" class="form-control" placeholder="" name="pname" value="<?php echo $data['ProductName']; ?>">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Descriptions</label>
 <input type="text" class="form-control" placeholder="" name="diss" value="<?php echo $data['Description']; ?>">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Initial Bids</label>
 <input type="text" class="form-control" placeholder="" name="bid" value="<?php echo $data['InitialBid']; ?>">
                          </div>
                      </div> 

                          <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Date of post</label>
 <input type="text" class="form-control" placeholder="" name="postdate" value="<?php echo $data['DateOfPost']; ?>">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>close Date</label>
 <input type="text" class="form-control" placeholder="" name="closedate" value="<?php echo $data['ClosingDate']; ?>">
                          </div>
                      </div>
                      
                     

                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>status</label>
 <input type="text" class="form-control" placeholder="" name="status" value="<?php echo $data['Status']; ?>">
                          </div>
                      </div>
                    
                    
					
                       <div>
                              <label>Picture</label><br>
 <input type="file" name="file1"  onChange="readURL(this)" >
 <img src="<?php echo $data['Image']; ?>" height=100 id="proimg">

                          </div>
                      </div>
                    
                    
                  </div>
                    <div class="col-md-12 px-1">
                          <div class="form-group">
                            
<input type="Submit" class="form-control" placeholder="Product" name="Submit">
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
$ps=$_POST["sid"];
$pn=$_POST["pname"];
$d=$_POST["diss"];
$bit=$_POST["bid"];
$pd=$_POST["postdate"];
$cd=$_POST["closedate"];
$st=$_POST["status"];
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
$q="update product set SellerId='$ps', ProductName='$pn', Description='$d', Image='$path' ,InitialBid='$bit',  DateOfPost='$pd', ClosingDate='$cd', Status='$st' where Id='$id'";
move_uploaded_file($filetemp,$path);
$result=mysqli_query($con,$q);
if($run){
  echo "<script>alert('product updated');window.location.href='ProductTable.php';</script>";
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
  $q="update product set SellerId='$ps', ProductName='$pn', Description='$d' ,InitialBid='$bit',  DateOfPost='$pd', ClosingDate='$cd', Status='$st' where Id='$id'";
  $run=mysqli_query($con,$q);
  if($run){
      echo "<script>alert('product updated');window.location.href='ProductTable.php';</script>";
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
