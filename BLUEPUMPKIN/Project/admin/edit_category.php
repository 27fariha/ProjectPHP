<?php
include 'header.php';
include('connect.php');
$iid=$_GET['Idd'];
$qu="select * from category where Id='$iid'";
$rows=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($rows);
?>
<section id="main-content">

   <section class="wrapper">
  <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-edit"></i> Edit Category</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="">
                   <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">ID</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname"  type="text" required name="id" readonly value="<?php echo $iid; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Category Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname"  type="text" required name="cname" value="<?php echo $data['category_name'] ?>"/>
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-8">
                                              <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">Click here to Edit Category</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
      </section>
    </section>
    <?php
if(isset($_POST['sub'])){
$a=$_POST["cname"];

$q="update category set category_name ='$a' where Id='$iid'";
$res=mysqli_query($con,$q);
if($res){
echo "<script> alert('Done Editing'); window.location.href='view_category.php';</script>";
}
else
{
echo "<script> alert('error'); </script>";
}
}

?>