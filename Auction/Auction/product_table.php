<?php
include('connection.php');
$q="Select * from product";
$rows=mysqli_query($con,$q);
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
                <h4 class="card-title"> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                   <h5> <a href="product.php" style="color:rgb(10, 10, 48)">Create New</a> </h5>
                    <thead class=" text-primary">
                      <th>
                        Seller Id
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
                          <th>
                        Edit
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
                       <?php echo $data['SellerId'] ?>
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
                          <img src="<?php echo $data['Image'] ?>" height=100>
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
<td> <a href='ProductUpdate.php?idd=<?php echo $data['Id']?>'> Edit </a></td>

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