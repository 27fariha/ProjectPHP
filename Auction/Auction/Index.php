<?php
       include('connection.php');
include('Header.php');
$date_now = date("Y-m-d");
if(ISSET($_SESSION['AUN'])){
$q="Select * from product where SellerId!='$_SESSION[AUI]' and ClosingDate >='$date_now' ORDER BY Id DESC  limit 6 ";
$run=mysqli_query($con,$q);
}
else{
  $q="Select * from product where ClosingDate >='$date_now' ORDER BY Id DESC  limit 6 ";
$run=mysqli_query($con,$q);
}

?>
 <!-- <div class="hero-slide owl-carousel site-blocks-cover"> -->
 <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
                <h1>The Best Place to Buy and Sell</h1>
             
                
              </div>
            </div>
          </div>
        </div>
        

        <!-- </div> -->


        <div class="site-section">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-7 mb-5 text-center mx-auto">
                <span class="caption">Auctions</span>
                <h2 class="text-black">Current <strong>Auctions</strong></h2>
              </div>
            </div>
            <div class="col-md-12">
                <div class="row auctions-entry">

                    <?php while($data=mysqli_fetch_assoc($run)) { ?>
                  <div class="col-lg-4 col-md-4 col-lg-4">
                    <div class="item">
                      <div>
                        <strong class="price">$<?php echo $data['InitialBid'] ?></strong>
                        <a href="item-single.php?id=<?php echo $data['Id'] ?>"><img src="<?php echo $data['Image'] ?>" alt="Image"  height="200"></a>
                      </div>

                      <div class="p-4">
                        <h3><a href="item-single.php?id=<?php echo $data['Id'] ?>"><?php echo $data['ProductName'] ?></a></h3>
                        <div class="d-flex mb-2">
                          <span>Closing Date:&nbsp; &nbsp;  </span>
                         <u> <span><?php echo $data['ClosingDate'] ?></span> </u>
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

        <div class="site-section pt-0">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 mb-5">
                <span class="caption">How?</span>
                <h2 class="text-black">How <strong>It Works</strong></h2>
                <p>This is because people can easily spend this amount online to buy products.</p>
              </div>
            </div>
            <div style="text-align:justify;" class="row">
              <div class="col-lg-3">
                <div class="step">
                  <span class="wrap-icon icon-user"></span>
                  <h3>Register</h3>
                  <p>Everything You Need To Start Selling Online Today. No Credit Card Required Secure Checkout.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="step">
                  <span class="wrap-icon icon-money"></span>
                  <h3>Buy or Bid</h3>
                  <p>“Bidder” refers to any legal entity that may submit, or has submitted, a Bid for the supply of goods.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="step">
                  <span class="wrap-icon icon-glass"></span>
                  <h3>Submit a bid</h3>
                 <p>“Bidder” refers to any legal entity that may submit, or has submitted, a Bid for the supply of goods.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="step last">
                  <span class="wrap-icon icon-trophy"></span>
                  <h3>Win</h3>
                  <p>The winning bidder will need to demonstrate that it provides the best value for money compared to other bids and against a public sector.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="site-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="col-lg-5 pl-lg-5">
                <div class="mb-5">
                  <span class="caption">About?</span>
                  <h2 class="text-black">About <strong>Us</strong></h2>
                </div>
                <div class="d-flex feature-icon mb-3">
                  <span class="wrap-icon icon-paper-plane mr-2"></span>
                  <div>
                    <h3>Fast Support</h3>
                    <p>Be cautious if you receive unsolicited requests to access your computer !</p>
                  </div>
                </div>

                <div class="d-flex feature-icon mb-3">
                  <span class="wrap-icon icon-smile-o mr-2"></span>
                  <div>
                    <h3>Happy Customers</h3>
                    <p>A happy customer isn't just someone who makes a purchase with you today !</p>
                  </div>
                </div>

                <div class="d-flex feature-icon mb-3">
                  <span class="wrap-icon icon-support mr-2"></span>
                  <div>
                    <h3>24/7 Support</h3>
                    <p>24-7 service (usually pronounced "twenty-four seven") is service that is available at any time and usually, every day !</p>
                  </div>
                </div>
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
                 <p><a href="login.php" class="btn btn-primary">Login</a></p>
              
              </div>
            </div>
          </div>  
        </div>
        <?php
        }
include('Footer.php')
?>