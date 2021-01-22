<?php
include('connection.php');
$q="Select product.*,users.FirstName from product join users on product.SellerId=users.Id";
$rows=mysqli_query($con,$q);
?>
<head>



</head>

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
                <h4 class="card-title"> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

    
                    <thead class=" text-primary">
                      <th>
                        Seller 
                      </th>
                      <th>
                        Product Name
                      </th>
                        <th>
                      Description
                      </th>
                      <th>
                        Initial Bid
                      </th>
                      <th>
                        Image
                      </th>
                      <th>
                        Date Of Post
                      </th>
                      <th>
                       Closing Date
                      </th>
                      <th>
                        Status
                      </th>
                         
                  
                    </thead>
                    <tbody>
                  <?php
while($data=mysqli_fetch_assoc($rows)){ ?>
                      <tr>
                         <td>
                       <?php echo $data['FirstName'] ?>
                        </td>
                        <td>
                       <?php echo $data['ProductName'] ?>
                        </td>
                         <td>
                       <?php echo $data['Description'] ?>
                        </td>
                         <td>
                       <?php echo $data['InitialBid'] ?>
                        </td>
                         <td>
                          <img src="../../<?php echo $data['Image'] ?>" height=100>
                        </td>
                         <td>
                       <?php echo $data['DateOfPost'] ?>
                        </td>
                       <td>
                       <?php echo $data['ClosingDate'] ?>
                        </td>
                         <td>
                       <?php echo $data['Status'] ?>
                        </td>

                      </tr>
                <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
       <?php
include('footer.php') ?>