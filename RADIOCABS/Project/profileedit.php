<?php session_start(); ?>
<?php
if($_SESSION['abc']==null)
{
  header('location:loginuser.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('dashboardHeader.php')
?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="./registerassests/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="./registerassests/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="./registerassests/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./registerassests/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="./registerassests/css/main.css" rel="stylesheet" media="all">
</head>
<?php
include('connect.php');
$id=$_GET['iid'];
$q = "select * from admin where Id=$id";
$rows = mysqli_query($con, $q);
$data=mysqli_fetch_assoc($rows);
?>
<body>
<div class="site-wrap">

<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

    <div style="margin:5%" >
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading" >
                    <h2 class="title">Profile Edit</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="#">
                      
                        <div class="form-row">
                            <div class="name">ID</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text"  value="<?php echo $id; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="uname" value="<?php echo $data['username']; ?>">
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="pwd" value="<?php echo $data['password']; ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button   class="btn btn-info" type="submit" name="sub" >Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Jquery JS-->
    <script src="~/registerassests/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="~/registerassests/vendor/select2/select2.min.js"></script>
    <script src="~/registerassests/vendor/datepicker/moment.min.js"></script>
    <script src="~/registerassests/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="~/registerassests/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<?php
include('dashboardfooter.php')
?>
</html>
<!-- end document-->
<?php

if(isset($_POST['sub'])){

$name=$_POST['uname'];
$pass=$_POST['pwd'];

$q="UPDATE admin SET username='$name' , password='$pass' where ID='$id' ";
$res=mysqli_query($con,$q);
if($res){
echo "<script> alert('profile updated Successfully'); window.location.href='adminprofile.php';</script>";

}
else{
echo "profile cannot edit";
}

}

?>