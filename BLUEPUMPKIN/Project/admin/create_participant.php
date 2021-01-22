<?php
include 'header.php';
include('connect.php');
$idd=$_GET['Id'];
$namee=$_GET['Name'];
$naam=$_SESSION["NAME"];
?>
<section id="main-content">
 <section class="wrapper">
  <div class="row mt">
    <div class="col-lg-12">
      <h4><i class="fa fa-user"></i> Add Participant</h4>
      <div class="form-panel">
        <div class=" form">
          <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="">
            <div class="form-group ">
            </div>
          </div>
          <h4> Event</h4>
          <input class="form-control " id="cemail" type="text" name="event" readonly value="<?php echo $namee; ?>"/>
          <input style="display: none;" type="text" name="ev" value="<?php echo $idd; ?>"/>
        </br>
        <h4> Employee</h4>
        <input class="form-control " id="cemail" type="text" name="neem" readonly value="<?php echo $naam;?>"/>
       <br><br><br>
       <div class="form-group">
        <div class="col-lg-offset-2 col-lg-8">
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">Click here to Add Participant</button>
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

if(isset($_POST['sub']))
{
  $b=$_POST["neem"];
  $C=$_POST["ev"];
  $qas="SELECT * FROM employee_register1 WHERE Name='$b'";
  $sel=mysqli_query($con,$qas);
  $data=mysqli_fetch_array($sel);
  $next=$data['id'];
  $Query="INSERT INTO participant(event_id,employee_id) VALUES('$C','$next')";
  $rex=mysqli_query($con,$Query);
  if($rex)
  {
    echo "<script> alert('Added Participant'); window.location.href='view_participant.php';</script>";
  }
  else
  {
   echo "<script> alert('TRy Again!!'); window.location.href='add_participant.php';</script>";
 }
}

?>