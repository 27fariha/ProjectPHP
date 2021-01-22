<?php

include('connection.php');
include('header.php');

?>

<head>

<!-- Main css -->
<link rel="stylesheet" href="../css/style_reg.css">


<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<style>

select { text-align: center; text-align-last: center; /* webkit*/ } option { text-align: left; /* reset to left*/ }

    </style>

</head>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="signup_create.php" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" required/>
                            </div>

                            <div class="form-group">
                            <label style="font-weight: normal; color: #aaa; text-indent: 5px;">Subscription Type</label>
                                    <?php
                                    $q="select * from subscription";
                                    $rows=mysqli_query($con,$q);
                                    echo "<select name='subscription' style='text-indent: 50px;' class='custom-select custom-select-sm' required>";
                                    echo "<option value='' disabled selected>Please Select</option>";
                                    while($data=mysqli_fetch_assoc($rows))
                                    {
                                    echo "<option value='$data[Subscription_ID]'>". $data['Subscription_Name'] ." </option>";
                                    }
                                    echo "</select>";
                                    ?>
                            </div>

                            <div class="form-group form-float">
                            <div class="form-line">
                                <label style="font-weight: normal; color: #aaa; text-indent: 5px;">Card Details</label>
                                <select name="card" style='text-indent: 50px;' class="custom-select custom-select-sm" required>
                                <option value="" disabled selected>Please Select</option>
                                <option value="VISA Classic">VISA Classic</option>
                                <option value="VISA Gold">VISA Gold</option>
                                <option value="VISA Platinum">VISA Platinum</option>
                                <option value="VISA Signature">VISA Signature</option>
                                <option value="VISA Infinite">VISA Infinite</option>
                                <option value="mastercard Standard">mastercard Standard</option>
                                <option value="mastercard Gold">mastercard Gold</option>
                                <option value="mastercard Platinum">mastercard Platinum</option>
                                <option value="UnionPay Standard">UnionPay Standard</option>
                                <option value="UnionPay Gold">UnionPay Gold</option>
                                <option value="UnionPay Platinum">UnionPay Platinum</option>
                                </select>
                            </div>
                            </div>

                            <div class="form-group form-float">
                                    <div class="form-line">
                                    <label style="font-weight: normal; color: #aaa; text-indent: 5px;">Date Registered</label>
                                        <input hidden type="date" style="text-indent: 60px;"  value="<?php echo date('Y-m-d')?>"  id="txtDate" class="form-control" name="date" required>
                                    </div>
                                </div>

                            <div class="form-group form-button">
                                <input type="submit" name="sub" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


// Material Select Initialization for select dropdown
<script type="text/javascript">
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>

<script>
  document.getElementById("txtDate").disabled = true;
</script>


<script>

$('#txtDate').datepicker({
      dateFormat: 'yy-mm-dd'
});

</script>


<?php

include('footer.php');

?>