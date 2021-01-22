<?php

include('header.php');
include('connection.php');

$x=$_GET['idd'];
$q="SELECT * FROM info WHERE Info_ID='$x'";
$run=mysqli_query($con,$q);
$result=mysqli_fetch_assoc($run);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Icons font CSS-->
    <link href="../form_content/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../form_content/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../form_content/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../form_content/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../form_content/css/main.css" rel="stylesheet" media="all">
</head>

<body>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT CONTACT INFO</h2>
                        </div>
                        <div class="body">
                            <form action="" id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="11" class="form-control" onkeypress='return digitsonly(event)' name="phone" value="<?php echo $result['phone']; ?>" required>
                                        <label class="form-label">Phone #</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="100" class="form-control" name="add" value="<?php echo $result['address']; ?>" required>
                                        <label class="form-label">Address</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" name="mail" value="<?php echo $result['email']; ?>" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="11" class="form-control" onkeypress='return digitsonly(event)' name="fax" value="<?php echo $result['fax']; ?>" required>
                                        <label class="form-label">Fax #</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="75" class="form-control" name="fb" value="<?php echo $result['facebook']; ?>" required>
                                        <label class="form-label">Facebook Page</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="75" class="form-control" name="tweet" value="<?php echo $result['twitter']; ?>" required>
                                        <label class="form-label">Twitter Handle</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="75" class="form-control" name="insta" value="<?php echo $result['instagram']; ?>" required>
                                        <label class="form-label">Instagram Account</label>
                                    </div>
                                </div>

                                <button name="sub" class="btn btn-primary waves-effect" type="submit">UPDATE</button>

                                <a name="sub" style="float:right" class="btn btn-danger waves-effect" href="info_read.php">CANCEL</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

</body>

<script language="JavaScript">

function digitsonly(e){
       var x = e.which || e.keycode;
   	if((x>=48 && x<=57))
   		return true;
   	else
   		return false;
   }

</script>


</html>
<!-- end document-->

<?php

include('footer.php');

    if(isset($_POST['sub']))
    {
    $phone=$_POST['phone'];
    $add=$_POST['add'];
    $mail=$_POST['mail'];
    $fax=$_POST['fax'];
    $fb=$_POST['fb'];
    $tweet=$_POST['tweet'];
    $insta=$_POST['insta'];

    $q="update info set phone='$phone', address='$add', email='$mail', fax='$fax', facebook='$fb', twitter='$tweet', instagram='$insta' where Info_ID='$x'";
    $run=mysqli_query($con,$q);
    if($run)
    {
    echo "
    <script>alert('Info Updated');window.location.href='info_read.php'</script>";

    }
    else
    {
    echo "<script>alert('Update Unsuccessful')</script>";
    }
    }   

?>