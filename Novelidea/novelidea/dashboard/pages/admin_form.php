<?php

include('header.php');
include('connection.php');
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
                            <h2>CREATE AN ADMIN</h2>
                        </div>
                        <div class="body">
                            <form action="admin_create.php" id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="50" onkeypress="return /[a-z]/i.test(event.key)" class="form-control" name="name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                <label for="gender" style="font-weight: normal; color: #aaa;"> Select Gender </label> </br>
                                    <input type="radio" name="gender" id="male" value="Male" class="with-gap">
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" id="female" value="Female" class="with-gap">
                                    <label for="female" class="m-l-20">Female</label>
                                </div>

                                <div class="form-group">
                                <label for="image" style="font-weight: normal; color: #aaa;"> Upload Image </label>
                                    <input id="image" name="image" type="file" onchange="loadFile(event); validateIMG(this);" class="form-control" required /> 
						            <img id="output" type="file" src="../images/upload.png" style="border-radius: 20%; padding-top: 5px; width:150px; height:150px; object-fit: cover;"/>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="50" class="form-control" name="email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="50" class="form-control" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>

                                <button name="sub" class="btn btn-primary waves-effect" type="submit">CREATE</button>

                                <a name="sub" style="float:right" class="btn btn-danger waves-effect" href="admin_read.php">CANCEL</a>

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

?>