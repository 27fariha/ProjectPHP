<?php

include('connection.php');
include('header.php');

if (!isset($_SESSION["ID_U"]))
{
   header("location: login.php");
}

$x=$_SESSION['ID_U'];
$q="SELECT * FROM members WHERE Member_ID='$x'";
$run=mysqli_query($con,$q);
$result=mysqli_fetch_assoc($run);

if($_SESSION['ID_U']==null)
{
    header('location:login.php');
}

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
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="profile.php"><?php echo "$_SESSION[NAME_U]'s Profile"; ?> <i class="fa fa-chevron-right"></i></a></span>  <h2 class="form-title">Edit Account Info</h2></p>
                        <form action="" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" value="<?php echo $result['Name']; ?>" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="<?php echo $result['Email']; ?>" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" value="<?php echo $result['Password']; ?>"/>
                            </div>

                            <div class="form-group">
                                <label style="font-weight: normal; color: #aaa; text-indent: 5px;">Subscription Type</label>
                                    <?php
                                    $q="select * from subscription";
                                    $q1="select * from members where Member_ID='$x'";
                                    $rows=mysqli_query($con,$q);
                                    $rows1=mysqli_query($con,$q1);
                                    $data1=mysqli_fetch_assoc($rows1);
                                    $subs=$data1["Subscription_ID_F"];
                                    echo "<select name='subscription' style='text-indent: 50px;' class='custom-select custom-select-sm'>";
                                    echo "<option value='' disabled selected>Please Select</option>";
                                    while($data=mysqli_fetch_assoc($rows))
                                    {

                                    echo "<option value='$data[Subscription_ID]'";                 
                                    if($subs == $data['Subscription_ID']) {
                                        echo "selected='selected'" ;}  echo "> $data[Subscription_Name] </option> " ;}
                                    echo "</select>";
                                    ?>
                            </div>

                            <?php
                                    $card=$data1["Card_Details"];
                            ?>

                            <div class="form-group form-float">
                            <div class="form-line">
                                <label style="font-weight: normal; color: #aaa; text-indent: 5px;">Card Details</label>
                                <select name="card" style='text-indent: 50px;' class="custom-select custom-select-sm">
                                <option value="" disabled selected>Please Select</option>
                                <option value="VISA Classic" <?php if($card == "VISA Classic") {echo "selected='selected'" ;} ?>> VISA Classic </option>
                                <option value="VISA Gold" <?php if($card == "VISA Gold") {echo "selected='selected'" ;} ?>> VISA Gold </option>
                                <option value="VISA Platinum" <?php if($card == "VISA Platinum") {echo "selected='selected'" ;} ?>> VISA Platinum </option>
                                <option value="VISA Signature" <?php if($card == "VISA Signature") {echo "selected='selected'" ;} ?>> VISA Signature </option>
                                <option value="VISA Infinite" <?php if($card == "VISA Infinite") {echo "selected='selected'" ;} ?>> VISA Infinite </option>
                                <option value="mastercard Standard" <?php if($card == "mastercard Standard") {echo "selected='selected'" ;} ?>> mastercard Standard </option>
                                <option value="mastercard Gold" <?php if($card == "mastercard Gold") {echo "selected='selected'" ;} ?>> mastercard Gold </option>
                                <option value="mastercard Platinum" <?php if($card == "mastercard Platinum") {echo "selected='selected'" ;} ?>> mastercard Platinum </option>
                                <option value="UnionPay Standard" <?php if($card == "UnionPay Standard") {echo "selected='selected'" ;} ?>> UnionPay Standard </option>
                                <option value="UnionPay Gold" <?php if($card == "UnionPay Gold") {echo "selected='selected'" ;} ?>> UnionPay Gold </option>
                                <option value="UnionPay Platinum" <?php if($card == "UnionPay Platinum") {echo "selected='selected'" ;} ?>> UnionPay Platinum </option>
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
                                <input type="submit" name="sub" id="signup" class="form-submit" value="Update"/>
                            </div>
                        </form>
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

    if(isset($_POST['sub']))
    {
        $n=$_POST['name'];
        $e=$_POST['email'];
        $p=$_POST['password'];
        $c=$_POST['card'];
        $s=$_POST['subscription'];
        $d=$_POST['date'];

        $d = date('Y-m-d');

    $q="update members set Name='$n', Email='$e', Password='$p', Card_Details='$c', Subscription_ID_F ='$s', Date_Registered ='$d' where Member_ID='$x'";
    $run=mysqli_query($con,$q);
    if($run)
    {
    echo "
    <script>alert('Info Updated');window.location.href='profile.php'</script>";

    }
    else
    {
    echo "<script>alert('Update Unsuccessful')</script>";
    }
    }   

?>