<?php

include('header.php');
include('connection.php');

$x=$_GET['idd'];
$q="SELECT * FROM category WHERE Category_ID='$x'";
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
                            <h2>EDIT ADMIN DETAILS</h2>
                        </div>
                        <div class="body">
                            <form action="" id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="50" class="form-control" onkeypress="return /[a-z]/i.test(event.key)" name="name" value="<?php echo $result['Category_Name']; ?>" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>

                                <button name="sub" class="btn btn-primary waves-effect" type="submit">UPDATE</button>

                                <a name="sub" style="float:right" class="btn btn-danger waves-effect" href="category_read.php">CANCEL</a>

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
    $name=$_POST['name'];

    $q="update category set Category_Name='$name' where Category_ID='$x'";
    $run=mysqli_query($con,$q);
    if($run)
    {
    echo "
    <script>alert('Category Updated');window.location.href='category_read.php'</script>";

    }
    else
    {
    echo "<script>alert('Update Unsuccessful')</script>";
    }
    }   

?>