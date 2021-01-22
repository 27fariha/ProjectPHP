<?php
include('connect.php');

$query="Select * from product_details join events on product_details.event_id_f=events.id";
$rows=mysqli_query($con,$query);

?>


<?php

include('header.php');
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
                            <h5 class="card-header">View Products</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Item Code</th>
                                                <th>Event Name</th>
                                                <th>Product Name</th>
                                                <th>Type</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php

while($data=mysqli_fetch_assoc($rows)){
echo "
<tr>
<td>".$data['Item_code']."</td>
<td>".$data['Event_Name']."</td>
<td>".$data['Product_name']."</td>
<td>".$data['Type']."</td>
<td><img src='$data[Image]' height=55 width=55></td>
<td>".$data['Description']."</td>
<td>".$data['Price']."</td>
<td><a href='productedit.php?id=$data[Id]'>Edit</a></td>
<td><a href='productdelete.php?id=$data[Id]'>Delete</a></td>
</tr>";
}
?>
                                            
                                        
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