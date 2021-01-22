<?php
include('dashboard.php')
?>
<!--main content start-->
    <section id="main-content">
         <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> ORDER </h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="get" action="">
              <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Id</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Id" name="Id" minlength="2" type="text" required  />
                    </div>
                  </div>
             
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Name</label>
                    <div class="col-lg-10">
                      <input pattern="^[A-Za-z]+\s?[A-Za-z]+" class=" form-control" id="firstname" name="firstname" minlength="2" type="text" required  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Address</label>
                    <div class="col-lg-10">
                      <input pattern="^[A-Za-z]+\s?[A-Za-z]+" class=" form-control" id="lastname" name="lastname" minlength="2" type="text" required />

                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Phone</label>
                    <div class="col-lg-10">
                      <input pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class=" form-control" id="lastname" name="lastname" minlength="2" type="text" required />

                    </div>
                  </div>
<div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Item Code</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="quantity" name="lastname" min="2" max="50" type="number" required />

                    </div>
                  </div>
<div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Quantity</label>
                    <div class="col-lg-10">
                      <input  class=" form-control" id="lastname" name="lastname" minlength="2" max="6" type="text" required />

                    </div>
                  </div>
<div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Delivery address</label>
                    <div class="col-lg-10">
                      <input  class=" form-control" id="lastname" name="lastname" minlength="2" type="text" required />

                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2">Delivery Date</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="date" name="date" type="datetime" minlength="2" required  />
                    </div>
                  </div>
                
                
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                     
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