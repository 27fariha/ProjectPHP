
<?php

include('header.php');
include('connect.php');
$query="select * from orders join customer_details on orders.customer_id=customer_details.Id";
$rows=mysqli_query($con,$query);
?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Order Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>OrderId</th>
                                                <th>Customer Name</th>
                                                <th>Grand Total</th>
                                                <th>Dated</th>
                                                <th>Phone</th>
                                                <th>Address</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php while($data=mysqli_fetch_assoc($rows)) { ?>
                                            <tr>
                                                <td><?php echo $data['id'] ?></td>
                                                <td><?php echo $data['Name'] ?></td>
                                                <td><?php echo $data['grand_total'] ?></td>
                                                <td><?php echo $data['created'] ?></td>
                                                <td><?php echo $data['phone'] ?></td>
                                                <td><?php echo $data['Address'] ?></td>
                
                                            </tr>
                                    <?php } ?>
                                            
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                
                <?php

            include('footer.php');

            ?>