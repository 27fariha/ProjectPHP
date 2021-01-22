
<?php

include('header.php');
include('connect.php');
$query="select * from order_items join product_details on order_items.product_id=product_details.Id";
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
                                                <th>Product Name</th>
                                                <th>Quantity</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php while($data=mysqli_fetch_assoc($rows)) { ?>
                                            <tr>
                                                <td><?php echo $data['order_id'] ?></td>
                                                <td><?php echo $data['Product_name'] ?></td>
                                                <td><?php echo $data['quantity'] ?></td>
                
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