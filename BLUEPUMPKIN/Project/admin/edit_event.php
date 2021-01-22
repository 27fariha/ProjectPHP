<?php
include 'header.php';
include('connect.php');
$iid=$_GET['Idd'];
$qu="select * from events where Id='$iid'";
$rows=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($rows);
?>
<section id="main-content">

 <section class="wrapper">
  <div class="row mt">
    <div class="col-lg-12">
      <h4><i class="fa fa-edit"></i> Edit Event</h4>
      <div class="form-panel">
        <div class=" form">
          <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="" enctype="multipart/form-data">
           <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">ID</label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"  type="text" required name="id" readonly value="<?php echo $iid; ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Category</label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"  type="text"  name="cname" value="<?php echo $data['category'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Name</label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"  type="text" required name="name" value="<?php echo $data['name'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Date </label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"   type="text" required name="dname" value="<?php echo $data['date'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">Duratin</label>
            <div class="col-lg-10">
              <input class="form-control " id="cemail" type="text" name="duname" required value="<?php echo $data['duration'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Time</label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"   type="text" required name="tname" value="<?php echo $data['time'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Brief Discription</label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"  type="text" required name="briname" value="<?php echo $data['Brief_Dis'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Details Discription</label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"  type="text" required name="disname" value="<?php echo $data['Detail_Dis'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Change Image</label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"  type="file"  name="image" required/>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-8">
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">Click here to Edit Event</button>
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
  $i=$_POST["id"];
  $a=$_POST["cname"];
  $e=$_POST["name"];
  $b=$_POST["dname"];
  $c=$_POST["duname"];
  $d=$_POST["tname"];
  $f=$_POST["briname"];
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
      $q="update events set category ='$a',name ='$e',date='$b',duration='$c',time='$d',Brief_Dis='$f',Detail_Dis='$g',image='$path' where id='$i'";
      $res=mysqli_query($con,$q);
      if($res){
        echo "<script> alert('Done Editing'); window.location.href='view_event.php';</script>";
      }
      else
      {
        echo "<script> alert('error'); </script>";
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