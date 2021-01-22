<!DOCTYPE html>
<html lang="en">
<?php
include('dashboardheader.php');
include('connect.php');
$id=$_GET['a'];
$q="select * from driver where Driver_ID='$id'";
$rows=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($rows);
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
    
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Driver update Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
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
                            <div class="name">Driver <br> ID</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="did" value="<?php echo $data['Driver_ID']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Driver <br> Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="drivername" value="<?php echo $data['Driver_Name']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" value="<?php echo $data['Password']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Contact <br> Person</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="contactperson" value="<?php echo $data['Contact_Person']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="address" value="<?php echo $data['Address']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="city" value="<?php echo $data['City']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Mobile</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="mobile" value="<?php echo $data['Mobile']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telephone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="telephone" value="<?php echo $data['Telephone']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" value="<?php echo $data['Email']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Experience</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="experience" value="<?php echo $data['Experience']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="description" value="<?php echo $data['Description']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Membership Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="membership">
                                            <option disabled="disabled" selected="selected">Choose Membership</option>
                                            <option>Premium</option>
                                            <option>Basic</option>
                                            <option>Free</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Payment</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="payment">
                                            <option disabled="disabled" selected="selected">Choose Payment</option>
                                            <option>Premium</option>
                                            <option>Basic</option>
                                            <option>Free</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Are you an existing customer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="editt" >Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['editt'])){
$Dname=$_POST['drivername'];
$Password=$_POST['password'];
$ContactPerson=$_POST['contactperson'];
$Address=$_POST['address'];
$City=$_POST['city'];
$Mobile=$_POST['mobile'];
$Telephone=$_POST['telephone'];
$Email=$_POST['email'];
$Experience=$_POST['experience'];
$Description=$_POST['description'];
$MembershipType=$_POST['membershiptype'];
$Payment=$_POST['payment'];


$que="update driver set Driver_Name='$Dname',  Password='$Password'  ,Contact_Person='$ContactPerson' , Address='$Address'  ,City='$City'  ,Mobile='$Mobile' ,
Telephone='$Telephone' , Email='$Email' , Experience='$Experience',  Description='$Description' , Membership_Type='$MembershipType' , Payment='$Payment'
 where Driver_ID='$id'";
$res=mysqli_query($con,$que);
if($res){
echo "<script>alert('Updated'); window.location.href='listdriver.php'; </script>";
}
else{
echo "<script>alert('error:'); </script>";
}
}
?>
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