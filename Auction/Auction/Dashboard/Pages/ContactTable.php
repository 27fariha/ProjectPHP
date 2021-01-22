<?php
include('connection.php');
$q="Select * from contact";
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

                   <h5> <a href="product.php" style="color:rgb(10, 10, 48)">Create New</a> </h5>
                    <thead class=" text-primary">
                      <th>
                      First Name
                      </th>
                      <th>
                        Last Name
                      </th>
                        <th>
                    Email
                      </th>
                      <th>
                        Tel Number
                      </th>
                      <th>
                      Message
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
                       <?php echo $data['LastName'] ?>
                        </td>
                         <td>
                       <?php echo $data['Email'] ?>
                        </td>
                         <td>
                       <?php echo $data['TelNum'] ?>
                        </td>
                        
                         <td>
                       <?php echo $data['Message'] ?>
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