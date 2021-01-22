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
include('connect.php');
?>

<?php
$today = date("y-m-d"); 
$pr=$_GET['pr'];
include('header.php')
?>
<section id="main-content">

 <section class="wrapper">
  <div class="row mt">
    <div class="col-lg-12">
      <h4><i class="fa fa-user"></i> Add Event</h4>
      <div class="form-panel">
        <div class=" form">
          <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="" enctype="multipart/form-data">
            <div class="form-group ">
             <label for="cname" class="control-label col-lg-2">Category</label>

             <div class="col-lg-10">
              <?php
              $q="select * from category";
              $rows=mysqli_query($con,$q);
              echo "<select name='catname' class='form-control'>";
              while($data=mysqli_fetch_assoc($rows))
              {
               echo "<option value='$data[id]'>". $data['category_name'] ." </option>";
             }
             echo "</select>";
             ?>
           </div>
         </div>
         <div class="form-group ">
          <label for="cname" class="control-label col-lg-2">Name</label>
          <div class="col-lg-10">
            <input class=" form-control" id="cname"   type="text" required name="name"/> 
          </div>
        </div>
        <div class="form-group ">
          <label for="cname" class="control-label col-lg-2">Date</label>
          <div class="col-lg-10">
            <input class=" form-control" id="cname" min="20<?php echo $today;?>" type="date" required name="dinname"/>
          </div>
        </div>
        <div class="form-group ">
          <label for="cemail" class="control-label col-lg-2">Duration </label>
          <div class="col-lg-10">
            <input class="form-control " id="cemail" type="text" name="durname" required/>
          </div>
        </div>
        <div class="form-group ">
          <label for="cname" class="control-label col-lg-2">Time </label>
          <div class="col-lg-10">
            <input class=" form-control" id="cname" type="time" required name="tymname"/>
          </div>
        </div>
        <div class="form-group ">
          <label for="cname" class="control-label col-lg-2">Image</label>
          <div class="col-lg-10">
            <input class=" form-control" id="cname"   type="file" required name="image"/>
          </div>
        </div>
        <div class="form-group ">
          <label for="cname" class="control-label col-lg-2">Brief Discription</label>
          <div class="col-lg-10">
            <input class=" form-control" id="cname"   type="text" required name="brfname"/> 
          </div>
        </div> <div class="form-group ">
          <label for="cname" class="control-label col-lg-2">Detail Discription</label>
          <div class="col-lg-10">
            <input class=" form-control" id="cname"   type="text" required name="disname"/> 
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-8">
           <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">Click here to Add Event</button>
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
if(isset($_POST["sub"]))
{
  $a=$_POST["catname"];
  $b=$_POST["name"];
  $c=$_POST["dinname"];
  $d=$_POST["durname"];
  $e=$_POST["tymname"];
  $f=$_POST["brfname"];
  $g=$_POST["disname"];
  $event = $_FILES['image']['name'];
  $eventtn=$_FILES['image']['tmp_name'];
  $eventty=$_FILES['image']['type'];
  $eventsi=$_FILES['image']['size'];
  $folder="eventimg/";

  if($eventty == "image/png" || $eventty == "image/jpg" || $eventty=="image/jpeg")
  {
    if($eventsi<=1000000)
    {
      $path= $folder . $event;
      move_uploaded_file($eventtn,$path);
      $cas="INSERT INTO events(category,name,date,duration,time,Brief_Dis,Detail_Dis,image) VALUES('$a','$b','$c','$d','$e','$f','$g','$path')";
      $crew=mysqli_query($con,$cas);
      if($crew)
      {
        echo "<script> alert('Added Event'); window.location.href='view_event.php';</script>";
      }
      else
      {
        echo "<script> alert('Retry');</script>";
      }
    }
    else
    {
      echo "<script> alert('Image size error'); window.location.href='add_event.php';</script>";
    }


  }

  else{
    echo "<script> alert('Image format error'); window.location.href='add_event.php';</script>";
  }
}
?>