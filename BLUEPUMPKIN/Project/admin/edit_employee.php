<?php 
$iid=$_GET['Idd'];
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if($_SESSION["ROLE"]=="EMP" && $_SESSION["ID"]!=$iid)
{

  header('LOCATION:login.php');

}

?>
<?php
include 'header.php';
include('connect.php');
$qu="select * from employee_register1 where Id='$iid'";
$rows=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($rows);
?>
<section id="main-content">

 <section class="wrapper">
  <div class="row mt">
    <div class="col-lg-12">
      <h4><i class="fa fa-edit"></i> Edit Employees</h4>
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
            <label for="cname" class="control-label col-lg-2">Full Name</label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"  type="text" required name="fname" value="<?php echo $data['Name'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">User Name </label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"   type="text" required name="lname" value="<?php echo $data['username'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">E-Mail </label>
            <div class="col-lg-10">
              <input class="form-control " id="cemail" type="email" name="email" required value="<?php echo $data['email'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">Qualification </label>
            <div class="col-lg-10">
              <input class="form-control " id="cemail" type="text" name="qualification" required value="<?php echo $data['Qualification'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">Date of Birth </label>
            <div class="col-lg-10">
              <input class="form-control " id="cemail" type="Date" name="dob" required  value="<?php echo $data['DOB'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Cnic </label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"   type="text" required name="cnic" value="<?php echo $data['Cnic'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Address </label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"   type="text" required name="address" value="<?php echo $data['address'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Contact </label>
            <div class="col-lg-10">
              <input class=" form-control" id="cname"   type="text" required name="phone" value="<?php echo $data['number'] ?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">Change CV</label>
            <div class="col-lg-10">
              <input class="form-control " id="cemail" type="file" name="cv" required  />
            </div>
          </div><div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">Change Image</label>
            <div class="col-lg-10">
              <input class="form-control " id="cemail" type="file" name="img" required />
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-8">
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">Click here to Edit Employee</button>
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
  $a=$_POST["fname"];
  $b=$_POST["lname"];
  $c=$_POST["email"];
  $d=$_POST["cnic"];
  $e=$_POST["address"];
  $f=$_POST["phone"];
  $cv = $_FILES['cv']['name'];
  $cvtn=$_FILES['cv']['tmp_name'];
  $cvty=$_FILES['cv']['type'];
  $cvsi=$_FILES['cv']['size'];
  $folder1="cvdocx/";
  $image = $_FILES['img']['name'];
  $imgtn=$_FILES['img']['tmp_name'];
  $imgty=$_FILES['img']['type'];
  $imgsi=$_FILES['img']['size'];
  $folder="myimages/";
  $path= $folder . $image;
  $path1=$folder1 . $cv;
  move_uploaded_file($cvtn,$path1);
  move_uploaded_file($imgtn,$path);

  $q="update employee_register1 set Name ='$a',username='$b',email='$c',Cnic='$d',address='$e',number='$f',image='$path',CV='$path1' where Id='$iid'";
  $res=mysqli_query($con,$q);
  if($res){
    echo "<script> alert('Done Editing'); window.location.href='view_employee.php';</script>";
  }
  else
  {
    echo "<script> alert('error'); </script>";
  }
}

?>