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
                            <h2>ADD A BOOK</h2>
                        </div>
                        <div class="body">
                            <form action="books_create.php" id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="100" class="form-control" name="name" required>
                                        <label class="form-label">Book's Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" maxlength="100" name="b_description" required>
                                        <label class="form-label">Brief Description</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="d_description" maxlength="250" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Detailed Description</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="50" onkeypress="return /[a-z]/i.test(event.key)" class="form-control" name="author" required>
                                        <label class="form-label">Author</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label style="font-weight: normal; color: #aaa;">Release Date</label>
                                        <input type="date" id="txtDate" max="<?php echo date("Y-m-d"); ?>" class="form-control" name="r_date" required>
                                        <input type="hidden" id="actualDate" name="actualDate"/>
                                    </div>
                                </div>

                            <div class="form-group form-float">
                            <div class="form-line">
                                <label style="font-weight: normal; color: #aaa;">Category</label>
                                    <?php
                                    $q="select * from category";
                                    $rows=mysqli_query($con,$q);
                                    echo "<select name='category' class='selectpicker show-tick'>";
                                    echo "<option value='' disabled selected>Please Select</option>";
                                    while($data=mysqli_fetch_assoc($rows))
                                    {
                                    echo "<option value='$data[Category_ID]'>". $data['Category_Name'] ." </option>";
                                    }
                                    echo "</select>";
                                    ?>
                            </div>
                            </div>

                            <div class="form-group form-float">
                            <div class="form-line">
                                <label style="font-weight: normal; color: #aaa;">Hardcopy Availability?</label>
                                <select name="hardcopy" id="hardcopy" class="selectpicker show-tick">
                                <option value="" disabled selected>Please Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                </select>
                            </div>
                            </div>
            
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="4" id="price" disabled="disabled" onkeypress='return digitsonly(event)' class="form-control" name="price" required>
                                        <label class="form-label">Price ($)</label>
                                    </div>
                                </div>

                            <div class="form-group form-float">
                            <div class="form-line">
                            <label for="file" style="font-weight: normal; color: #aaa;"> Upload eBook (PDF only) </label>
                            <input type="file" id="ebook" name="ebook" onchange="validatePDF(this)"/>
                                </br>
                                </div>
                                </div>

                                <div class="form-group">
                                <div class="form-line">
                                    <label for="image" style="font-weight: normal; color: #aaa;">Upload Book Cover Image</label>
                                    <input id="image" name="image" type="file" onchange="loadFile(event); validateIMG(this);" class="form-control" required /> 
                                    <img id="output" name="output" type="file" src="../images/upload.png" style="border-radius: 20%; padding-top: 5px; width:150px; height:150px; object-fit: cover;"/>
                                </br> </br>
                                </div>
                                </div>

                            <div class="form-group form-float">
                            <div class="form-line">
                                <label style="font-weight: normal; color: #aaa;">Premium Grade?</label>
                                <select name="premium" class="selectpicker show-tick">
                                <option value="" disabled selected>Please Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                </select>
                            </div>
                            </div>

                                <button name="sub" class="btn btn-primary waves-effect" type="submit">ADD</button>

                                <a name="sub" style="float:right" class="btn btn-danger waves-effect" href="books_read.php">CANCEL</a>

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

document.getElementById('hardcopy').onchange = function () 
{
    if (this.value == 'Yes') 
    {
        document.getElementById("price").disabled = false;
    }

    else 
    {
        document.getElementById("price").value = "";
        document.getElementById("price").disabled = true;
    }
}

</script>

<script language="JavaScript">

function validatePDF(objFileControl)
{
var uploadField = document.getElementById("ebook");
var file = objFileControl.value;
var len = file.length;
var ext = file.slice(len - 4, len);

if(ext.toUpperCase() != ".PDF")
{
alert("Only PDF files allowed.");
document.getElementById('ebook').value= null;
}

if(uploadField.files[0].size > 5000000){
alert("File is too big! You can upload a maximum of 5 MB");
document.getElementById('ebook').value= null;
}
}

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

<!-- FOR CONVERTING DD-MM-YYYY TO YYYY-MM-DD -->
<script language="JavaScript">

$("selector").datepicker({
    altField : "#actualDate"
    altFormat: "yyyy-mm-dd"
});
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