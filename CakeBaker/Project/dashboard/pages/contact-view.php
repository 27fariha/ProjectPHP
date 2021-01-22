<?php
include('connect.php');

$query="Select * from contact";
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
                            <h5 class="card-header">Messages</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Delete</th>
                                        
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php

while($data=mysqli_fetch_assoc($rows)){
echo "
<tr>
<td>".$data['Name']."</td>
<td>".$data['Email']."</td>
<td>".$data['Subject']."</td>
<td>".$data['Message']."</td>
<td><a href='contact-delete.php?id=$data[id]'>Delete</a></td>
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