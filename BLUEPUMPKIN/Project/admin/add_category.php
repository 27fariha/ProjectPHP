<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if($_SESSION["ROLE"]=="EMP")
{
  header('LOCATION:login.php');
}
?>

<?php
include 'header.php';
?>
<section id="main-content">

   <section class="wrapper">
  <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-user"></i> Add Category</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Category Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname"  type="text" required name="cname"/>
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-8">
                                              <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">Click here to Add Category</button>
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
include('connect.php');
if(isset($_POST["sub"]))
{

$b=$_POST["cname"];
$query="insert into category(category_name) values ('$b')";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('Added Category'); window.location.href='view_category.php';</script>";
}
else
{
echo "retry";
}
}
?>