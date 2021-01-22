<?php
include('header.php');
include('connect.php');
$id=$_GET['id'];
$qu="SELECT * FROM events WHERE Id=$id";
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
                                <h5 class="card-header">Edit Event</h5>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate method='POST' action=''>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Event Name</label>
                                                <input type="text" class="form-control" name="type" id="validationCustom01" placeholder="add event" value="
            <?php echo $data['Event_Name']; ?>"  required>
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
$a=$_POST["type"];

$q="update events set Event_Name ='$a' where Id='$id'";
$res=mysqli_query($con,$q);
if($res){
echo "<script> alert('Done Editing'); window.location.href='event-view.php';</script>";
}
else
{
echo "<script> alert('error'); </script>";
}
}

?>

