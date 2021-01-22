<!DOCTYPE html>
<html lang="en">
<?php
include('headerr.php')
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
    
    <div style="background-color: white;margin:5%;">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading" style="background-color: orange">
                    <h2 class="title">Driver Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="insertdriver.php">
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
                            <div class="name">Driver <br> Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="drivername" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*">
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-row">
                            <div class="name">Contact <br> Person</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="contactperson" pattern="^(\+\d{1,3}[- ]?)?\d{10}$">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="address" pattern="^[A-Za-z-0-99999999">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="city" pattern="^[A-Za-z-0-99999999">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Mobile</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="mobile" pattern="^(\+\d{1,3}[- ]?)?\d{10}$">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telephone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="telephone" pattern="^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Experience</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="experience" pattern="^[A-Za-z0-9.]{5,1000}$">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="description" pattern="^[A-Za-z0-9.]{5,1000}$">
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" title="Minimum eight characters, at least one letter, one number and one special character">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Payment</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="payment" class="input--style-5">
                                            <option disabled="disabled" selected="selected">Choose Payment Type</option>
                                            <option>Monthly</option>
                                            <option>Quaterly</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                        <div>
                            <button  style="background-color:orange" class="btn btn--radius-2 btn--red" type="submit" name="driversubmit" >Register</button>
                        </div>
                    </form>
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
include('footerr.php')
?>
</html>
<!-- end document-->