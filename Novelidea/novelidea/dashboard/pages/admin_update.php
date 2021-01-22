<?php

include('header.php');
include('connection.php');

$x=$_SESSION['ID'];
$q="SELECT * FROM admin WHERE Admin_ID='$x'";
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

    <style>
.underline_label:hover {
    text-decoration: underline;
}
    </style>
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
                                        <input type="text" maxlength="50" class="form-control" onkeypress="return /[a-z]/i.test(event.key)" name="name" value="<?php echo $result['Name']; ?>" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="radio" name="gender" id="male" value="Male" class="with-gap" <?php if($result['Gender']=="Male") {echo "checked";}?> >
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" id="female" value="Female" class="with-gap" <?php if($result['Gender']=="Female") {echo "checked";}?> >
                                    <label for="female" class="m-l-20">Female</label>
                                </div>

                                <div class="form-group">
                                    <label for="image" class="control-label mb-1 underline_label" style="cursor:pointer;">Change uploaded image file</label> <br/>
                                    <input id="image" name="image" type="file" onchange="loadFile(event); validateIMG(this);" class="form-control hidden" /> 
						            <img id="output" type="file" src="<?php echo $result['Image']; ?>" style="border-radius: 20%; padding-top: 5px; width:150px; height:150px; object-fit: cover;"/>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" name="email" value="<?php echo $result['Email']; ?>" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="50" class="form-control" name="password" value="<?php echo $result['Password']; ?>" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>

                                <button name="sub" class="btn btn-primary waves-effect" type="submit">UPDATE</button>

                                <a name="sub" style="float:right" class="btn btn-danger waves-effect" href="index.php">CANCEL</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

</body>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

<script>

function checkEmail(str)
{
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(str))
    alert("Please enter a valid email address");
}

</script>

<script language="JavaScript">

function validateIMG(obj) 
{
var uploadField = document.getElementById("image");
var fileExtension = ['jpeg', 'jpg', 'png'];

if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1)
{
alert("Only PNG/JPG/JPEG files allowed.");
document.getElementById('image').value= null;
document.getElementById("output").src="../images/upload.png";
}

if(uploadField.files[0].size > 2000000){
alert("File is too big! You can upload a maximum of 2 MB");
document.getElementById('image').value= null;
document.getElementById("output").src="../images/upload.png";
}
}
</script>

</html>
<!-- end document-->

<?php
    include('footer.php');
    include('connection.php');
    if(isset($_POST['sub']))
    {
    $n=$_POST['name'];
    $g=$_POST['gender'];
    $e=$_POST['email'];
    $p=$_POST['password'];

    $image=$_FILES['image']['name'];
    $imagetn=$_FILES['image']['tmp_name'];
    $imagety=$_FILES['image']['type'];
    $imagesi=$_FILES['image']['size'];
    $folderim="../images/";

if(is_uploaded_file($_FILES['image']['tmp_name']))
{
$pathim=$folderim.$image;
move_uploaded_file($imagetn, $pathim);

    $q="update admin set Name='$n', Gender='$g', Image='$pathim', Email='$e', Password='$p' where Admin_ID='$x'";
    $run=mysqli_query($con,$q);
    if($run)
    {
    echo "
    <script>alert('Admin Details Updated');window.location.href='admin_read.php'</script>";
    }
    else
    {
    echo "<script>alert('Update Unsuccessful')</script>";
    }
    }   
else
{
    $q="update admin set Name='$n', Gender='$g', Email='$e', Password='$p' where Admin_ID='$x'";
    $run=mysqli_query($con,$q);
    if($run)
    {
        echo "<script>alert('Admin Details Updated');window.location.href='admin_read.php';</script>";
    }
    else
    {
        echo "<script>alert('Update Unsuccessful')</script>";
    }
}
    }
?>