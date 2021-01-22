<?php
include('dashboard.php');
include('connect.php');
?>
      <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>  Category</h3>
  <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Category Records</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Edit</th>
       <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php
$qas="SELECT * FROM catagory";
$sel=mysqli_query($con,$qas);
while($data=mysqli_fetch_assoc($sel)){
echo "<tr>
<td>".$data['Id']."</td>
<td>".$data['Catagory']."</td>

<td><a href='Update.php?id=$data[Id]'>Edit</a></td>
<td><a href='Delete.php?id=$data[Id]'>Delete</a></td>
</tr>";
}
?>
                </tbody>
              </table>
            </div>
          </div>
         </section>
</section>

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