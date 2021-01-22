<?php
include('dashboard.php')
?>
<!--main content start-->
    <section id="main-content">
         <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-product-hunt"></i> PRODUCT </h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="productinsert.php" enctype="multipart/form-data">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">CId</label>
                    <div class="col-lg-10">
<?php
include('connect.php');
$query="Select * from Catagory";
$rows=mysqli_query($con,$query);
echo "<select name='cat' class='form-control'>";
while   ($data=mysqli_fetch_array($rows) )
{
        echo "<option value='$data[Id]'> ".$data[Catagory]." </option>";                        
}
echo "</select>";
?>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">eId</label>
                    <div class="col-lg-10">
                    <?php
include('connect.php');
$query="Select * from event";
$rows=mysqli_query($con,$query);
echo "<select name='eve' class='form-control'>";
while   ($data=mysqli_fetch_array($rows) )
{
        echo "<option value='$data[Id]'> ".$data[type]." </option>";                        
}
echo "</select>";
?>
                    </div>
                  </div>
                 <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Cakename</label>
                    <div class="col-lg-10">
                      <input pattern="^[A-Za-z]+\s?[A-Za-z]+" class=" form-control" id="Cakename" name="Cakename"  type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Price</label>
                    <div class="col-lg-10">
                      <input pattern="\d+(\.\d{2})?" class="form-control " id="Price" name="Price"  type="text" required  />
                    </div>
                  </div>
                       
   <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Available</label>
  <div class="col-lg-10">
                     <select class="form-control" name="sel">
            <option>Yes</option>
            <option>No</option>
                </select>
                    </div>
                  </div>

                    <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Product Type</label>
  <div class="col-lg-10">
                     <select class="form-control" name="ptype">
            <option>Eggless</option>
            <option>With Egg</option>
                </select>
                    </div>
                  </div>                                                                                                                          
                   <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">ItemCode</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Cakename" name="ItemCode"  type="text" min="2" max="50" required />
                    </div>
                  </div>
<div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Image</label>
                    <div class="col-lg-10">
                      <input accept="image/*" class=" form-control" id="pic" name="pic"  type="file" required  />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="btn">Save</button>
                     
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


 