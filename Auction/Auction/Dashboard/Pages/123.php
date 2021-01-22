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
include('header.php');
include('connection.php');
$q="SELECT COUNT(Id) AS NumberOfBids FROM bid";
$run=mysqli_query($con,$q);
$d=mysqli_fetch_assoc($run);

$q1="SELECT COUNT(Id) AS NumberOfClients FROM users";
$run1=mysqli_query($con,$q1);
$d1=mysqli_fetch_assoc($run1);


$q11="SELECT COUNT(Id) AS NumberOfWinners FROM auctionsuccess";
$run11=mysqli_query($con,$q11);
$d11=mysqli_fetch_assoc($run11);
?>














   
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Number of Clients</h5>
                <h4 class="card-title"><?php echo $d1['NumberOfClients'] ?></h4>
              </div>
              <div class="card-body">
              </div>
              <div class="card-footer">
              </div>
            </div>
          </div>
      
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Numbers of Bid</h5>
                <h4 class="card-title"><?php echo $d['NumberOfBids'] ?></h4>
              </div>
              <div class="card-body">
              </div>
              <div class="card-footer">
              </div>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Number of Sales</h5>
                <h4 class="card-title"><?php echo $d11['NumberOfWinners'] ?></h4>
              </div>
              <div class="card-body">
              </div>
              <div class="card-footer">
              </div>
            </div>
          </div>


        
        </div>
       
      </div>




      
        </div>
      </div>
    <?php
include('footer.php') ?>