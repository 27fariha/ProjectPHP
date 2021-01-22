<?php
session_start();
include('connection.php');
$q="Select * from admin where Id='$_SESSION[AUI]'";
$rows=mysqli_query($con,$q);
?>



<?php
include('header.php') 
?>


      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
   
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        User Name
                      </th>
                      <th>
                       Password
                      </th>
                      <th>
                      Address
                      </th>
                      <th>
                      Email
                      </th>
                      
                      <th>
                      Number
                      </th>
                      
                      <th>
                       Image
                      </th>
                  
                          <th>
                        Edit
                      </th>
                        
                    </thead>
                    <tbody>
                  <?php
while($data=mysqli_fetch_assoc($rows)){ ?>
                      <tr>
                        <td>
                       <?php echo $data['UserName'] ?>
                        </td>
                                   <td>
                       <?php echo $data['Password'] ?>
                        </td>
                        <td>
                       <?php echo $data['Address'] ?>
                        </td>
                        <td>
                       <?php echo $data['Email'] ?>
                        </td>
                        <td>
                       <?php echo $data['Phone'] ?>
                        </td>
                                   <td>
                                    <img src="    <?php echo $data['Image'] ?>" height=100>
                   
                        </td>

                      
<td> <a href='AdminUpdate.php?idd=<?php echo $data['Id']?>'> Edit </a></td>
 <!--
     <td> <a href='RoleDelete.php?idd=<?php echo $data['Id']?>'>  Delete </a></td>
      -->
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