<?php 
include('header.php');
include('connect.php');
$q="select count(Id) as abc from customer_details";
$run=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($run);
$q1="select count(Id) as abc1 from product_details";
$run1=mysqli_query($con,$q1);
$data1=mysqli_fetch_assoc($run1);
$q2="select count(Id) as abc2 from events";
$run2=mysqli_query($con,$q2);
$data2=mysqli_fetch_assoc($run2);
$q3="select count(Id) as abc3 from orders";
$run3=mysqli_query($con,$q3);
$data3=mysqli_fetch_assoc($run3);
?>
                            
                         
                            
                            
                            
                            
                                
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    
                    
                    <div class="ecommerce-widget">

                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Events</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $data2['abc2']; ?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Cakes</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $data1['abc1']; ?></h1>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- visitor  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Customers</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $data['abc']; ?></h1>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end visitor  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total orders  -->
                            <!-- ============================================================== -->
                            
                                                     
                        </div>                                
                            </div>
                                          
                        </div>
                    </div>
                
            
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
                 <?php 
                 include('footer.php');
                 ?>