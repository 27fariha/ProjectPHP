<?php

include('header.php');
include('connection.php');

$x=$_GET['idd'];
$q="SELECT * FROM subscription WHERE Subscription_ID='$x'";
$run=mysqli_query($con,$q);
$result=mysqli_fetch_assoc($run);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                            <h2>UPDATE PACKAGE DETAILS</h2>
                        </div>
                        <div class="body">
                            <form action="" id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="50" onkeypress="return /[a-z]/i.test(event.key)" class="form-control" name="name" value="<?php echo $result['Subscription_Name']; ?>" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>

                                <?php
                                    $dur=$result["Duration"];
                                ?>
                                <div class="form-group form-float">
                            <div class="form-line">
                                <label style="font-weight: normal; color: #aaa;">Duration</label>
                                <select name="duration" class="selectpicker show-tick">
                                <option value="" disabled selected>Please Select</option>
                                <option value="Weekly" <?php if($dur == "Weekly") {echo "selected='selected'" ;} ?> >Weekly</option>
                                <option value="Monthly" <?php if($dur == "Monthly") {echo "selected='selected'" ;} ?> >Monthly</option>
                                <option value="Quarterly" <?php if($dur == "Quarterly") {echo "selected='selected'" ;} ?> >Quarterly</option>
                                <option value="Half-Yearly" <?php if($dur == "Half-Yearly") {echo "selected='selected'" ;} ?> >Half-Yearly</option>
                                <option value="Yearly" <?php if($dur == "Yearly") {echo "selected='selected'" ;} ?> >Yearly</option>
                                <option value="Lifetime" <?php if($dur == "Lifetime") {echo "selected='selected'" ;} ?> >Lifetime</option>
                                </select>
                            </div>
                            </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="4" class="form-control" onkeypress='return digitsonly(event)' name="charges" value="<?php echo $result['Charges']; ?>">
                                        <label class="form-label">Charges ($)</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" maxlength="250" cols="30" rows="5" class="form-control no-resize" required> <?php echo $result['Description']; ?> </textarea>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image" class="control-label mb-1 underline_label" style="cursor:pointer;">Change uploaded image file</label> <br/>
                                    <input id="image" name="image" type="file" onchange="loadFile(event); validateIMG(this)" class="form-control hidden" /> 
						            <img id="output" type="file" src="<?php echo $result['Image']; ?>" style="border-radius: 20%; padding-top: 5px; width:150px; height:150px; object-fit: cover;"/>
                                </div>

                                <button name="sub" class="btn btn-primary waves-effect" type="submit">UPDATE</button>

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
    include('connection.php');
    if(isset($_POST['sub']))
    {
    $n=$_POST['name'];
    $du=$_POST['duration'];
    $c=$_POST['charges'];
    $de=$_POST['description'];

    $image=$_FILES['image']['name'];
    $imagetn=$_FILES['image']['tmp_name'];
    $imagety=$_FILES['image']['type'];
    $imagesi=$_FILES['image']['size'];
    $folderim="../images/";

if(is_uploaded_file($_FILES['image']['tmp_name']))
{
$pathim=$folderim.$image;
move_uploaded_file($imagetn, $pathim);

    $q="update subscription set Subscription_Name='$n', Duration='$du', Charges='$c', Description='$de', Image='$pathim' where Subscription_ID='$x'";
    $run=mysqli_query($con,$q);
    if($run)
    {
    echo "
    <script>alert('Package Details Updated');window.location.href='subscription_read.php'</script>";

    }
    else
    {
    echo "<script>alert('Update Unsuccessful')</script>";
    }
}
else
{
    $q="update subscription set Subscription_Name='$n', Duration='$du', Charges='$c', Description='$de' where Subscription_ID='$x'";
    $run=mysqli_query($con,$q);
    if($run)
    {
        echo "<script>alert('Package Details Updated');window.location.href='subscription_read.php';</script>";
    }
    else
    {
        echo "<script>alert('Update Unsuccessful')</script>";
    }
}
}

?>