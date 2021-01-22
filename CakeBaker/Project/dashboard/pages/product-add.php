
<?php
include('header.php');
include('connect.php'); ?>
<?php 
$q="select * from events";
$run=mysqli_query($con,$q);

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
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Add Product</h5>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate method="POST" action="productinsert.php" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Item code</label>
                                                <input type="text" name="itm" class="form-control" id="validationCustom01" placeholder="add item code"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <br>
                                        
                                            </div><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Events</label>
   <select  name="evt" class="form-control" id="validationCustom02" placeholder="specify type"  required>
                                                    <?php  while($daa=mysqli_fetch_assoc($run)){ ?>
                                                        <option value="<?php echo$daa['id']?>"><?php echo $daa['Event_Name']?></option>
       <?php } ?>
                                               
                                                    </select>
                                                <br>
                                            </div>
                                            

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Product name</label>
                                                <input type="text"  name="prd" class="form-control" id="validationCustom02" placeholder="add product"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <br>
                                            </div><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Type</label>
                                                    <select  name="type" class="form-control" id="validationCustom02" placeholder="specify type"  required>
                                                    <option>Egg</option>
                                                    <option>Eggless</option>
                                                    </select>
                                                <br>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Image</label>
                                                <input type="file" name="pic" class="form-control" id="validationCustom02"   required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <br>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Description</label>
                                                <input type="text" name="des" class="form-control" id="validationCustom02" placeholder="add description"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <br>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Price</label>
                                                <input type="text" name="prc" class="form-control" id="validationCustom02" placeholder="add price" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <br>
                                                </div>



                                            <br>
                                            
                                        </div>
                                        <div class="form-row">
                                            
                                            
                                            
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button name="btn" class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
                    </div>
                   
           
            </div>
            <!-- ============================================================== -->
            
            <?php

            include('footer.php');

            ?>




