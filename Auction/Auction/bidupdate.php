<?php
include('connection.php');
$id=$_GET['idd'];
$q="select * from bid where Id='$id'";
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
                    
                    
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Buyer id</label>
 <input type="text" class="form-control" placeholder="" name="bId" value="<?php echo $data['BuyerId']; ?>">
                          </div>
                      </div>

                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>product id</label>
 <input type="text" class="form-control" placeholder="" name="pid" value="<?php echo $data['ProductId']; ?>">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>bid prices</label>
 <input type="text" class="form-control" placeholder="" name="bpri" value="<?php echo $data['BidPrice']; ?>">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>date</label>
 <input type="text" class="form-control" placeholder="" name="dte" value="<?php echo $data['Date']; ?>">
                          </div>
                      </div>
					
                      
                    
                    
                  </div>
                    <div class="col-md-12 px-1">
                          <div class="form-group">
                            
<input type="Submit" class="form-control" placeholder="Bid" name="Submit">
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

    $bi=$_POST["bId"];
$pi=$_POST["pid"];
$bp=$_POST["bpri"];
$dt=$_POST["dte"];
$q="update bid set BuyerId='$pi',ProductId='$bp', BidPrice='$dt' where Id='$id'";
$ex=mysqli_query($con,$q);
if($ex){
echo "<script>alert('Updated');window.location.href='bid.php'  </script>";
}
else{
echo "<script>alert('error');</script>";
}

}
?>