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

</head>

<body>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ADD A SUBSCRIPTION PACKAGE</h2>
                        </div>
                        <div class="body">
                            <form action="subscription_create.php" id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="50" onkeypress="return /[a-z]/i.test(event.key)" class="form-control" name="name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                            <div class="form-line">
                                <label style="font-weight: normal; color: #aaa;">Duration</label>
                                <select name="duration" class="selectpicker show-tick">
                                <option value="" disabled selected>Please Select</option>
                                <option value="Weekly">Weekly</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Quarterly">Quarterly</option>
                                <option value="Half-Yearly">Half-Yearly</option>
                                <option value="Yearly">Yearly</option>
                                <option value="Lifetime">Lifetime</option>
                                </select>
                            </div>
                            </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="4" onkeypress='return digitsonly(event)' class="form-control" name="charges">
                                        <label class="form-label">Charges ($)</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" maxlength="250" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image" style="font-weight: normal; color: #aaa;" class="control-label mb-1">Upload Image</label>
                                    <input id="image" name="image" type="file" onchange="loadFile(event); validateIMG(this);" class="form-control" required /> 
						            <img id="output" type="file" src="../images/upload.png" style="border-radius: 20%; padding-top: 5px; width:150px; height:150px; object-fit: cover;"/>
                                </div>

                                <button name="sub" class="btn btn-primary waves-effect" type="submit">ADD</button>

                                <a name="sub" style="float:right" class="btn btn-danger waves-effect" href="subscription_read.php">CANCEL</a>

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

?>