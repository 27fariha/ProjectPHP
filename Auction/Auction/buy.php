       <?php
       include('connection.php');
include('Header.php');
$date_now = date("Y-m-d");
if(ISSET($_SESSION['AUN'])){
$q="Select * from product where SellerId!='$_SESSION[AUI]' and ClosingDate >='$date_now'";
$run=mysqli_query($con,$q);
}
else{
$q="Select * from product where ClosingDate >='$date_now'";
$run=mysqli_query($con,$q);
}
?>


      <!-- <div class="hero-slide owl-carousel site-blocks-cover"> -->
        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
                <h1>Buy , Bid</h1>
                <p>Buy product from our auction.</p>
              <?php if($_SESSION['AUN']==null) { ?>
              <p><a href="login.php" class="btn btn-primary">Login</a></p>
              <?php } ?>
                
              </div>
            </div>
          </div>
        </div>
        

        <!-- </div> -->


        <div class="site-section">
          <div class="container">

        
              <div class="col-md-12">
                <div class="row auctions-entry">

                    <?php while($data=mysqli_fetch_assoc($run)) { ?>
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="item">
                      <div>
                        <strong class="price">$<?php echo $data['InitialBid'] ?></strong>
                        <a href="item-single.php?id=<?php echo $data['Id'] ?>"><img src="<?php echo $data['Image'] ?>" alt="Image"  height=300 width=300></a>
                      </div>
                      <div class="p-4">
                        <h3><a href="item-single.php?id=<?php echo $data['Id'] ?>"><?php echo $data['ProductName'] ?></a></h3>
                        <div class="d-flex mb-2">
                          <span>Closing Date: &nbsp; &nbsp;</span>
                          <span><?php echo $data['ClosingDate'] ?></span>
                        </div>
                        <?php if($_SESSION['AUN']==null) { ?>
                        <a href="login.php" class="btn btn-bid">Submit a Bid</a>
                        <?php } else { ?>
                          <a href="item-single.php?id=<?php echo $data['Id'] ?>" class="btn btn-bid">Submit a Bid</a>
                        <?php  } ?>
                      </div>

                    </div>
                  </div>
   
                   <?php } ?>



                </div>
              </div>

            </div>

          </div>

         

          <?php if($_SESSION['AUN']==null) { ?>

          <div class="site-section">
            <div class="container">
              <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                  <h2 class="text-black mb-4">Create an account and start Buy, Bid or Sell Now!</h2>
                  <a href="register.php" class="btn btn-primary">Register</a>
                </div>
              </div>
            </div>  
          </div>
          <?php } ?>


            </div>
        <?php
include('Footer.php')
?>