<?php
include('header.php');
include ('connect.php');
$Id=$_GET['id'];
$qu="SELECT * FROM product_details WHERE Id=$Id";
$res=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($res);
$eve=$data['event_id_f'];
$type=$data['Type'];
$q="select * from events";
$rows=mysqli_query($con,$q);
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
                                <h5 class="card-header">Edit Product</h5>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate method="POST" action="" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Item code</label>
                                                <input type="text" name="itm" class="form-control" id="validationCustom01" placeholder="add item code" value="
            <?php echo $data['Item_code']; ?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <br>


                                            
                                            
                                            </div>
                                      
                                              
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Events</label>
   <select  name="evt" class="form-control" id="validationCustom02" placeholder="specify type"  required>
                                                    <?php  while($daa=mysqli_fetch_assoc($rows)){ ?>
  <option value="<?php echo$daa['id']?>"  <?php if($eve == $daa['id']) { echo "selected='selected'";} ?>>
                <?php echo $daa['Event_Name']?></option>
       <?php } ?>
                                               
                                                    </select>
                                                <br>
                                            </div>



                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Product name</label>
                                                <input type="text"  name="prd" class="form-control" id="validationCustom02" placeholder="add product" value="
            <?php echo $data['Product_name']; ?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <br>
                                            </div>
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Type</label>
                                                    <select  name="type" class="form-control" id="validationCustom02" placeholder="specify type"  required>
                   <option  <?php if($type == "Egg") { echo "selected='selected'";} ?>>Egg</option>
                   <option  <?php if($type == "Eggless") { echo "selected='selected'";} ?>> Eggless</option>
                                                    </select>
                                                <br>
                                            </div>  
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Image</label>
                                                <input type="file" name="pic" class="form-control" id="validationCustom02"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <br>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Description</label>
                                                <input type="text" name="des" class="form-control" id="validationCustom02" placeholder="add description" value="
            <?php echo $data['Description']; ?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <br>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Price</label>
                                                <input type="text" name="prc" class="form-control" id="validationCustom02" placeholder="add price"value="
            <?php echo $data['Price']; ?>" required>
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
    
    <!-- /MAIN CONTENT -->
    <!--main content end-->
        <?php
include('footer.php')
?>
 
</body>
</html>
<?php
if(isset($_POST['btn'])){
  $b=$_POST["evt"];
  $c=$_POST["prd"];
  $d=$_POST["prc"];
$f=$_POST["itm"];
$g=$_POST["des"];
$h=$_POST["type"];
  $image = $_FILES['pic']['name'];
  $imgtn=$_FILES['pic']['tmp_name'];
  $imgty=$_FILES['pic']['type'];
  $imgsi=$_FILES['pic']['size'];
  $folder="myimages/";
  if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jpeg")
  {
    if($imgsi<=1000000)
    {
      $path= $folder . $image;
      move_uploaded_file($imgtn,$path);

      $q="update product_details set Item_code ='$f',event_id_f='$b',Product_name='$c',Price='$d',Type='$h',Image='$path',Description='$g' where Id='$Id'";
      $res=mysqli_query($con,$q);
      if($res)
      {
        echo "<script> alert('Done Editing'); window.location.href='product-view.php';</script>";
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