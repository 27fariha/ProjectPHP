<?php
include('connection.php');
$id=$_GET['idd'];
$q="select * from auctionsuccess where Id='$id'";
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
                <form action="" method="POST">
                  <div class="row">
                    
                    
                     <class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Bid Id</label>
 <input type="text" class="form-control" placeholder="" name="bd" value="<?php echo $data['bidId']; ?>">
                          </div>
                      </div>
					
                      
                    
                    
                  </div>
                    <div class="col-md-12 px-1">
                          <div class="form-group">
                            
<input type="Submit" class="form-control" placeholder="Auction" name="Submit">
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
$n=$_POST['bd'];
$q="update auctionsuccess set bidId='$n' where Id='$id'";
$ex=mysqli_query($con,$q);
if($ex){
echo "<script>alert('Updated');window.location.href='AuctionTable.php'  </script>";
}
else{
echo "<script>alert('error');</script>";
}

}
?>