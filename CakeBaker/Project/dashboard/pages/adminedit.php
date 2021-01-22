<?php
include('header.php');
include('connect.php');
$id=$_SESSION['admin2'];
$qu="SELECT * FROM admin WHERE Id=$id";
$res=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($res);
?>
<!--main content start-->
    
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
                                <h5 class="card-header">Add Profile</h5>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate method='POST' action=''>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">User Name</label>
                                                <input type="text" class="form-control" name="username" id="validationCustom01" placeholder="your username" value="
            <?php echo $data['User_name']; ?>"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                
                                                <br>


                                            <br>
                                            
                                            
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Password</label>
                                                <input type="text" class="form-control" name="password" id="validationCustom01" placeholder="your password" value="
            <?php echo $data['Password']; ?>"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                
                                                <br>


                                            <br>
                                            
                                            
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Email</label>
                                                <input type="text" class="form-control" name="email" id="validationCustom01" placeholder=" email address" value="
            <?php echo $data['Email']; ?>"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                
                                                <br>


                                            <br>
                                            
                                            
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Phone</label>
                                                <input type="text" class="form-control" name="phone" id="validationCustom01" placeholder="add phone" value="
            <?php echo $data['Phone']; ?>"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                
                                                <br>


                                            <br>
                                            
                                            
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Address</label>
                                                <input type="text" class="form-control" name="add" id="validationCustom01" placeholder="add address" value="
            <?php echo $data['Address']; ?>"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                
                                                <br>


                                            <br>
                                            
                                            
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Address Details</label>
                                                <input type="text" class="form-control" name="adds" id="validationCustom01" placeholder="add address detail" value="
            <?php echo $data['Address_Detail']; ?>"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                
                                                <br>


                                            <br>
                                            
                                            
                                        </div>



                                        <div class="form-row">
                                            
                                            
                                            
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" name="btn" type="submit">Submit form</button>
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
    <?php
if(isset($_POST['btn'])){
$a=$_POST["username"];
$b=$_POST["password"];
$c=$_POST["email"];
$d=$_POST["phone"];
$e=$_POST["add"];
$f=$_POST["adds"];


$q="update admin set User_name ='$a', Password ='$b', Email='$c', Phone='$d', Address='$e', Address_Detail='$f'  where Id='$id'";
$res=mysqli_query($con,$q);
if($res){
echo "<script> alert('Done Editing'); window.location.href='index.php';</script>";
}
else
{
echo "<script> alert('error'); </script>";
}
}

?>

