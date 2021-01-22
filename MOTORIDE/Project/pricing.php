<?php session_start();?>
<?php 
if($_SESSION['ABC']==null){
  header('location:./Login.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Moto Rider - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
 
   <!-- Title Page-->
    <title>Register Form</title>

    <!-- Icons font CSS-->
    <link href="abc/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="abc/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="abc/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="abc/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="abc/css/main.css" rel="stylesheet" media="all">
    <style>

body
{
    background-image: url(images/bg_1.jpg);


}

</style>
<?php
$con=mysqli_connect('localhost','root','','carbook');

if(!$con)
{
    echo 'done';
}
  $id = $_GET['idd'];
    $q = "select * from cars where Id='$id'";
    $rows=mysqli_query($con,$q);
	$data=mysqli_fetch_assoc($rows);
?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php">MOTO<span>RIDER</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
              <li class="nav-item"><a href="car.php" class="nav-link">Cars</a></li>
              <li class="nav-item"><a href="reg_form.php" class="nav-link">Register</a></li>
              <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
              <li class="nav-item"><?php if($_SESSION['ABC']==null){ echo "<a href='Login.php' class='nav-link'>Login</a>";} else{ echo "<a href='Logout.php' class='nav-link'>Logout</a>";}?></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
    
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                
                <div class="card-body">
                    <h2 class="title">Sale Car</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input  class="input--style-3" type="text" placeholder="Car_id" name="car_id" value="<?php if($id!=null){echo $id;}?>" readonly="true">
                        </div>

                        <div class="input-group">
                            <input  class="input--style-3" type="text" placeholder="User_id" name="user_id" value="<?php echo $_SESSION['ABCD'] ?>" readonly="true">
                        </div>
						  <div class="input-group">
                            <input  class="input--style-3" type="date" placeholder="Date" name="date">
                        </div>

                         <div class="input-group">
                         <label>Deliverable</label>
                         <select name="Deliverable">
                         <option>Yes</option>
                         <option>No</option>
                         </select>
                                
                        </div>

                       	 <div class="input-group">
              <input id="b" class="input--style-3" type="text" placeholder="Price" name="in" value="<?php echo $data['Price']?>" readonly>
            </div> 
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name='sub'>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2"><a href="#" class="logo">MOTO<span>RIDER</span></a></h2>
          <p>Motoride is a transport-based user-friendly service, that which an average person can easily use. The goal is to make a web-based project in which the user can rent out a car of thier choice and also place thier car for rent and can sell thier car as well.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
   
      <div class="col-md">
       <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Quick Links</h2>
        <ul class="list-unstyled">
          <li><a href="index.php" class="py-2 d-block">Home</a></li>
          <li><a href="about.php" class="py-2 d-block">About</a></li>
          <li><a href="car.php" class="py-2 d-block">Cars</a></li>
          <li><a href="reg_form.php" class="py-2 d-block">Register</a></li>
          <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
           <li><a href="Login.php" class="py-2 d-block">Login</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon icon-map-marker"></span><span class="text">Aptech North Nazimabad Campus, Karachi, Pakistan.</span></li>
           <li><a href="#"><span class="icon icon-phone"></span><span class="text">+92 123 456 789</span></a></li>
           <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yoursite.com</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</div>
</footer>
   
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->



    <?php
$con=mysqli_connect('localhost','root','','carbook');

if(!$con)
{
    echo 'done';
}
if(isset($_POST['sub']))
{
    $c_id=$_POST['car_id'];
    $u_id=$_POST['user_id'];
    $date=$_POST['date'];
    $del=$_POST['Deliverable'];
	$pr=$_POST['in'];


    $q="INSERT into salecar (Car_id,User_id,Date,Deliverable,Price) VALUES ('$c_id','$u_id','$date','$del','$pr')";
$r=mysqli_query($con,$q);

if($r)
{
  
    echo "<script>alert('Done');</script>";
}
else{
    $msg="not";
    echo $msg;
}

}