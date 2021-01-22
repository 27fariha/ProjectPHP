<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
include('connection.php');
$q="select * from admin";
$run=mysqli_query($con,$q);
$d=mysqli_fetch_assoc($run);
?>

<div class="footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <p class="mb-4"><img src="images/logo_footer.png" alt="Image" class="img-fluid"></p>
                <p style="text-align:justify;">Our company helps in a process of buying and selling goods or services by offering them up for bid, taking bids, and then selling the item to the highest bidder or buying the item from the lowest bidder.</p>  
         
              </div>
              <div class="col-lg-1">
              </div>
            <div class="col-lg-2">
                <h3 class="footer-heading"><span>Services</span></h3>
                <ul class="list-unstyled">
                
          
             <li> 
              <div class="service" height="8" weight="8">
                <span class="icon-user" size="0"></span>
              Buy Products
              </div>
             </li>
           
             <li>
              <div class="service">
                <span class="icon-money" height="8px"></span>
                Sell Products
              </div>
              </li>
              <li>

              <div class="service ">
                <span class="icon-glass"></span>
                Submit a Bid
              </div>
           
              </li> <li>
              <div class="service last">
                <span class="icon-trophy" height="48px"></span>
                Win a Bid
              </div>
              </li>
            
                </ul>
              </div>
              <div class="col-lg-1">
              </div>
             <div class="col-lg-4">
                <h3 class="footer-heading"><span>Contact Us</span></h3>
                
                <div class="mb-3 ">              
                  <p class="mb-0 font-weight-bold text-black">Address</p>
                  <p class="mb-4 "><?php echo $d['Address'] ?></p>

                  <p class="mb-0 font-weight-bold text-black">Phone</p>
                  <p class="mb-4"><?php echo $d['Phone'] ?></p>

                  <p class="mb-0 font-weight-bold text-black">Email Address</p>
                  <p class="mb-0"><?php echo $d['Email'] ?></p>

                </div>
              
              </div>

              </div>
                

                <div class="row">
                  <div class="col-12">
                    <div class="copyright">
                      <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Auction Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                    </div>
                  </div>
                </div>
          </div>
            


</div>
      <!-- .site-wrap -->

      <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
      <!-- loader -->
      <div id="loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/>
      </svg></div>

      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/jquery.mb.YTPlayer.min.js"></script>




      <script src="js/main.js"></script>

    </body>

    </html>