<?php
include('Header.php');
include('connection.php');
$i=$_GET['id'];
$q="select * from product where Id='$i'";
$run=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($run);
?>

      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
              <h1><?php echo $data['ProductName'] ?></h1>
              <p><?php echo $data['Description'] ?></p>
              
            </div>
          </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 order-lg-2">
              <div class="side-box mb-4">
                <p>
                  Initial Bid: <strong class="text-black">$<?php echo $data['InitialBid'] ?></strong> <br>
                </p>
                <form action="bidcreate.php" method="POST">
                  <div class="mb-4">

                    <input type="HIDDEN" id="fname" name="bId" class="form-control mb-2" value="<?php echo $_SESSION['AUI'] ?>">
                    <input type="HIDDEN" id="lname" name="dt" class="form-control mb-2" required  value="<?php echo date("Y-m-d") ?>">
                    <input type="HIDDEN" id="lname" name="it" class="form-control mb-2" required  value="<?php echo $data['InitialBid'] ?>">

                    <input type="HIDDEN" id="lname" name="pid" class="form-control mb-2" required  value="<?php echo $i ?>">
                    <input type="text" id="eaddress" name="bpri" class="form-control mb-2" required placeholder="Enter Your Bid">
                    <input type="submit" name="Submit" value="Submit a Bid" class="btn btn-block">

                  </div>
                </form>
              </div>
             
            </div>
            <div class="col-lg-8 pr-lg-5">
              <div class="owl-carousel slide-one-item mb-5">
                <img src="<?php echo $data['Image'] ?>" alt="Image" class="img-fluid mb-54">
                
              </div>
              <p style="color:black;"><?php echo $data['Description'] ?></p>
            </div>
          </div>
        </div>
      </div>



    <?php
include('Footer.php')
?>