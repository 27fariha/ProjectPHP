<?php
include('dashboard.php');
include ('connect.php');
$Id=$_GET['id'];
$qu="SELECT * FROM product WHERE Id=$Id";
$res=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($res);
?>
<!--main content start-->
    <section id="main-content">
         <div class="row mt">
          <div class="col-lg-12">
            <h4>&nbsp;&nbsp;&nbsp;<i class="fa fa-edit"></i> PRODUCT </h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="get" action="">
       
              <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Id</label>
                    <div class="col-lg-10">
            <input class=" form-control" id="id" name="id" minlength="2" type="text" required readonly value="<?php echo $data['Id']; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">CId</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="CId" name="CId" minlength="2" type="text" required value="<?php echo $data['Cid']; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">eId</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="eId" name="eId" minlength="2" type="text" required value="<?php echo $data['eid']; ?>"/>
                    </div>
                  </div>
                 <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Cakename</label>
                    <div class="col-lg-10">
       <input pattern="^[A-Za-z]+\s?[A-Za-z]+" class=" form-control" id="Cakename" name="Cakename" minlength="2" type="text" required value="<?php echo $data['Cake_name']; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Price</label>
                    <div class="col-lg-10">
           <input pattern="\d+(\.\d{2})?" class="form-control " id="Price" name="Price" minlength="2" type="text" required value="<?php echo $data['Price']; ?>" />
                    </div>
                  </div>
                       
   <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Available</label>
  <div class="col-lg-10">
                     <select class="form-control">
            <option>Yes</option>
            <option>No</option>
                </select>
                    </div>
                  </div>

                          <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Type</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Avaliable" name="type" type="text" minlength="2"  required value="<?php echo $data['type']; ?>"/>
                    </div>
                  </div>                                                                                                                          
                   <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">ItemCode</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Cakename" name="ItemCode" minlength="2" type="text" required value="<?php echo $data['itemcode']; ?>" />
                    </div>
                  </div>
<div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Image</label>
                    <div class="col-lg-10">
                    <img src="<?php echo $data['image'];?>" height=55 width=55>
            <input accept="image/*" class=" form-control" id="pic" name="image"  type="file" required />
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
  $a=$_POST["Cid"];
  $b=$_POST["eid"];
  $c=$_POST["Cake_name"];
  $d=$_POST["Price"];
  $e=$_POST["type"];
  $j=$_POST["itemcode"];
  $image = $_FILES['image']['name'];
  $imgtn=$_FILES['image']['tmp_name'];
  $imgty=$_FILES['image']['type'];
  $imgsi=$_FILES['image']['size'];
  $folder="myimages/";
  if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jpeg")
  {
    if($imgsi<=1000000)
    {
      $path= $folder . $image;
      move_uploaded_file($imgtn,$path);

      $q="update product set Cid ='$a',eid='$b',Cake_name='$c',Price='$d',type='$e',itemcode='$j',image='$path' where Id='$Id'";
      $res=mysqli_query($con,$q);
      if($res)
      {
        echo "<script> alert('Done Editing'); window.location.href='productread.php';</script>";
      }
      else
      {
        echo "<script> alert('error'); </script>";
      }
    }
    else
    {
      echo "<script> alert('Image size error'); </script>";
    }
  }
  else
  {
    echo "<script> alert('Image format error'); </script>";
  }
}

?>