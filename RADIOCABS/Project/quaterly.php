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
                <div class="card-heading" style="background-color: orange">
                    <h2 class="title">Quaterly</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="insertquaterly.php">
                        <!-- <div class="form-row m-b-55">
                            <div class="name">Company Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-row">
                            <div class="name">Quater</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="quater">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Company ID</div>
                            <div class="value">
                                <div class="input-group">
                                <?php
include ('connect.php');
$q="select * from company";
$rows=mysqli_query($con,$q);
                               
echo "<select name='compid' class=input-group>";
while($data=mysqli_fetch_assoc($rows)){
 echo "<option value='$data[Advertise_ID]'>". $data['Company_Name'] ." </option>";
}
echo "</select>";
?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="date">
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button style="background-color: orange" class="btn btn--radius-2 btn--red" type="submit" name="quaterlysubmit" >Submit</button>
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