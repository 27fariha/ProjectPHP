<?php

include('header.php');
include('connection.php');

$x=$_GET['idd'];
$query="SELECT * from orders o JOIN members m on m.Member_ID = o.customer_id WHERE id='$x'";
$run=mysqli_query($con,$query);
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

</head>

<body>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT ORDER STATUS</h2>
                        </div>
                        <div class="body">
                            <form action="" id="form_validation" method="POST" enctype="multipart/form-data">

                                <?php
                                    $q1="select * from orders where id='$x'";
                                    $rows1=mysqli_query($con,$q1);
                                    $data1=mysqli_fetch_assoc($rows1);
                                    $st=$data1["status"];
                                ?>
                            <div class="form-group form-float">
                            <div class="form-line">
                                <label style="font-weight: normal; color: #aaa;">Status</label>
                                <select name="stat" class="selectpicker show-tick">
                                <option value="" disabled selected>Please Select</option>
                                <option value="Pending" <?php if($st == "Pending") {echo "selected='selected'" ;} ?> >Pending</option>
                                <option value="Confirmed" <?php if($st == "Confirmed") {echo "selected='selected'" ;} ?> >Confirmed</option>
                                <option value="Dispatched" <?php if($st == "Dispatched") {echo "selected='selected'" ;} ?> >Dispatched</option>
                                <option value="Delivered" <?php if($st == "Delivered") {echo "selected='selected'" ;} ?> >Delivered</option>
                                <option value="Cancelled" <?php if($st == "Cancelled") {echo "selected='selected'" ;} ?> >Cancelled</option>
                                </select>
                            </div>
                            </div>

                                <button name="sub" class="btn btn-primary waves-effect" type="submit">UPDATE</button>

                                <a name="sub" style="float:right" class="btn btn-danger waves-effect" href="order_read.php">CANCEL</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

</body>

</html>
<!-- end document-->

<?php

include('footer.php');

    if(isset($_POST['sub']))
    {
    $stat=$_POST['stat'];

    $q="update orders set status ='$stat' where id='$x'";
    $run=mysqli_query($con,$q);
    if($run)
    {
    echo "
    <script>alert('Order Details Updated');window.location.href='order_read.php'</script>";

    }
    else
    {
    echo "<script>alert('Update Unsuccessful')</script>";
    }
    }   

?>