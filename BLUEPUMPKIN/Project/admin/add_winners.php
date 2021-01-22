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
include 'connect.php';
?>
<section id="main-content">

 <section class="wrapper">
  <div class="row mt">
    <div class="col-lg-12">
      <h4><i class="fa fa-user"></i> Add Winners</h4>
      <div class="form-panel">
        <div class=" form">
          <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="">
   



 <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Participant Name</label>

              <div class="col-lg-10">
               <?php
$id=$_GET['Idd'];
               $q="SELECT p.id, m.Name FROM participant p JOIN employee_register1 m ON p.employee_id=m.id JOIN events e ON p.event_id=e.id where  e.id='$id'";
               $rows=mysqli_query($con,$q);
               echo "<select name='cname' class='form-control'>";
               while($data=mysqli_fetch_assoc($rows))
               {
                 echo "<option value='$data[id]'>". $data['Name'] ." </option>";
               }
               echo "</select>";
               ?>
             </div>
           </div>


           <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Price</label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"  type="text" required name="Pname"/>
            </div>
          </div>


          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-8">
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">Click here to Add Winners
              </button>
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
  $b=$_POST["cname"];
  $c=$_POST["Pname"];
  $query="INSERT INTO winner(p_id,prize) VALUES('$b','$c')";
  $result=mysqli_query($con,$query);
  if($result)
  {
    echo "<script> alert('Added winner'); window.location.href='view_winners.php';</script>";
  }
  else
  {
    echo "<script> alert('Retry');</script>";
  }
}
?>