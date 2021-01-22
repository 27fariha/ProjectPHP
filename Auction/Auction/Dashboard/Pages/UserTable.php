<?php
include('connection.php');
$q="Select * from users";
$rows=mysqli_query($con,$q);
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
                <h4 class="card-title">  </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

         
                    <thead class=" text-primary">
                      <th>
                      First Name
                      </th>
                      <th>
                      Last Name
                      </th>
                      <th>
                      Cnic
                      </th>
                      <th>
                      Email
                      </th>
                      <th>
                      Image
                      </th>
                      <th>
                      Date Of Birth
                      </th> 
                    
                      <th>
                      Contact
                      </th>
                       <th>
                      Conpany
                      </th>
                     
                          
                          <th>
                       Delete
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
                       <?php echo $data['Cnic'] ?>
                        </td>
                        <td>
                       <?php echo $data['Email'] ?>
                        </td>
                        <td>
                        <img src="../../<?php echo $data['Image'] ?>" height=100>
                        </td>
                        <td>
                       <?php echo $data['DateOfBirth'] ?>
                        </td>
                       
                        <td>
                       <?php echo $data['Contact'] ?>
                        </td>
                        <td>
                       <?php echo $data['Company'] ?>
                        </td>
                       
                      

 <td> <a href='UserDelete.php?idd=<?php echo $data['Id']?>'>  Delete </a></td>
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