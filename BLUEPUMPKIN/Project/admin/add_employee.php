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
      <h4><i class="fa fa-user"></i> Add Employee</h4>
      <div class="form-panel">
        <div class=" form">
          <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="" enctype="multipart/form-data">
            <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Full Name</label>
              <div class="col-lg-10">
                <input class=" form-control" id="cname"  type="text" required name="fname"/>
              </div>
            </div>
            <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">User Name </label>
              <div class="col-lg-10">
                <input class=" form-control" id="cname"  pattern="^[A-Za-z]+\s?[A-Za-z]+" type="text" required name="lname"/>
              </div>
            </div>
            <div class="form-group ">
              <label for="cemail" class="control-label col-lg-2">E-Mail </label>
              <div class="col-lg-10">
                <input class="form-control " id="cemail" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
              </div>
            </div>
            <div class="form-group ">
              <label for="cemail" class="control-label col-lg-2">Qualification </label>
              <div class="col-lg-10">
                <input class="form-control " id="cemail" type="text" name="qualification" required/>
              </div>
            </div>
            <div class="form-group ">
              <label for="cemail" class="control-label col-lg-2">Date of Birth </label>
              <div class="col-lg-10">
                <input class="form-control " id="cemail" max="2002-01-01" type="Date" name="dob" required/>
              </div>
            </div>

            <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Cnic </label>
              <div class="col-lg-10">
                <input class=" form-control" id="cname"   type="text" required name="cnic"/>
              </div>
            </div>
            <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Address </label>
              <div class="col-lg-10">
                <input class=" form-control" id="cname"   type="text" required name="address"/>
              </div>
            </div>
            <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Contact </label>
              <div class="col-lg-10">
                <input class=" form-control" id="cname"  pattern="^\d{4}-?\d{7}" type="text" required name="phone"/>
              </div>
            </div>
            <div class="form-group ">
              <label for="cemail" class="control-label col-lg-2"> CV</label>
              <div class="col-lg-10">
                <input class="form-control " id="cemail" type="file" name="cv" required/>
              </div>
            </div><div class="form-group ">
              <label for="cemail" class="control-label col-lg-2"> Image</label>
              <div class="col-lg-10">
                <input class="form-control " id="cemail" type="file" name="image" required/>
              </div>
            </div>
            <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Password </label>
              <div class="col-lg-10">
                <input class=" form-control" id="cname" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" type="password" required />
              </div>
            </div>

            <div class="form-group ">

              <label for="cname" class="control-label col-lg-2" >Role</label>
              <div class="col-lg-10" >

                <?php
                include ('connect.php');
                $q="select * from role_table";
                $rows=mysqli_query($con,$q);
                echo "<select name='role' class='form-control'>";
                while($data=mysqli_fetch_assoc($rows)){
                 echo "<option value='$data[role]'>". $data[role_name] ." </option>";
               }
               echo "</select>";
               ?>
             </div>
           </div>



           <div class="form-group">
            <div class="col-lg-offset-2 col-lg-8">
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">Click here to Add Employee</button>
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
  $a=$_POST["fname"];
  $b=$_POST["lname"];
  $c=$_POST["email"];
  $d=$_POST["cnic"];
  $e=$_POST["address"];
  $f=$_POST["phone"];
  $g=$_POST["password"];
  $h=$_POST["role"];
  $i=$_POST["qualification"];
  $j=$_POST["dob"];
  $cv = $_FILES['cv']['name'];
  $cvtn=$_FILES['cv']['tmp_name'];
  $cvty=$_FILES['cv']['type'];
  $cvsi=$_FILES['cv']['size'];
  $folder1="cvdocx/";
  $image = $_FILES['image']['name'];
  $imgtn=$_FILES['image']['tmp_name'];
  $imgty=$_FILES['image']['type'];
  $imgsi=$_FILES['image']['size'];
  $folder="myimages/";
  if(($imgty == "image/png" || $imgty == "image/jpg" || $imgty=="image/jpeg") && ($cvty == "application/pdf" || $cvty == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"))
  {
    if($imgsi<=100000000000000 || $cvsi<=1000000){
      $path= $folder . $image;
      $path1=$folder1 . $cv;
      move_uploaded_file($cvtn,$path1);
      move_uploaded_file($imgtn,$path);
      $cas="INSERT INTO employee_register1(Name,username,email,Qualification,DOB,Cnic,address,number,password,CV,image,role) VALUES('$a','$b','$c','$i','$j','$d','$e','$f','$g','$path1','$path','$h')";
      $crew=mysqli_query($con,$cas);
      if($crew)
      {
        echo "<script> alert('Added'); window.location.href='view_employee.php';</script>";
      }
      else
      {
        echo "<script> alert('This user is already taken please try another username');</script>";
      }
    }
    else
    {
      echo "<script> alert('Image size error'); window.location.href='add_employee.php';</script>";
    }
  }
  else
  {
    echo "<script> alert('Image format error'); window.location.href='add_employee.php';</script>";
  }
}
?>