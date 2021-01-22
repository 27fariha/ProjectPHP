<?php
include('dashboard.php');
include('connect.php');
$id=$_GET['id'];
$qu="SELECT * FROM event WHERE Id=$id";
$res=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($res);
?>
<!--main content start-->
    <section id="main-content">
         <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> EVENTS </h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">
            <div class="form-group ">
          <label for="firstname" class="control-label col-lg-2">ID</label>
          <div class="col-lg-10">
       <input class=" form-control" id="firstname" name="Id" minlength="2" type="text" required  readonly value="<?php echo $data['Id']; ?>" />
          </div>
        </div>
      <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Type</label>
                    <div class="col-lg-10">
                      <input pattern="^[A-Za-z]+\s?[A-Za-z]+" class="form-control " id="Price" name="type" minlength="2" type="text" required value="<?php echo $data['type']; ?>"  />
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="btn">Edit</button>
                     
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
        <?php
include('footer.php')
?>
 <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>
</body>
</html>
    <?php
if(isset($_POST['btn'])){
$a=$_POST["type"];

$q="update event set type ='$a' where Id='$id'";
$res=mysqli_query($con,$q);
if($res){
echo "<script> alert('Done Editing'); window.location.href='eventread.php';</script>";
}
else
{
echo "<script> alert('error'); </script>";
}
}

?>