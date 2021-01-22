<?php

include('header.php');
include('connection.php');

$x=$_GET['idd'];
$q="SELECT * FROM books WHERE Book_ID='$x'";
$run=mysqli_query($con,$q);
$result=mysqli_fetch_assoc($run);
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
                            <h2>EDIT BOOK DETAILS</h2>
                        </div>
                        <div class="body">
                            <form action="" id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="100" class="form-control" name="name" value="<?php echo $result['Book_Name']; ?>" required>
                                        <label class="form-label">Book's Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" maxlength="100" name="b_description" value="<?php echo $result['Brief_Description']; ?>" required>
                                        <label class="form-label">Brief Description</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="d_description" maxlength="250" cols="30" rows="5" class="form-control no-resize" required> <?php echo $result['Detailed_Description']; ?> </textarea>
                                        <label class="form-label">Detailed Description</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="50" class="form-control" onkeypress="return /[a-z]/i.test(event.key)"  name="author" value="<?php echo $result['Author']; ?>" required>
                                        <label class="form-label">Author</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label style="font-weight: normal; color: #aaa;">Release Date</label>
                                        <input type="date" class="form-control" max="<?php echo date("Y-m-d"); ?>" name="r_date" value="<?php echo $result['Release_Date']; ?>" required>
                                        <input type="hidden" id="actualDate" name="actualDate"/>
                                    </div>
                                </div>

                            <div class="form-group form-float">
                            <div class="form-line">
                                <label style="font-weight: normal; color: #aaa;">Category</label>
                                    <?php
                                    $q="select * from category";
                                    $q1="select * from books where Book_ID='$x'";
                                    $rows=mysqli_query($con,$q);
                                    $rows1=mysqli_query($con,$q1);
                                    $data1=mysqli_fetch_assoc($rows1);
                                    $cat=$data1["Category_ID_F"];
                                    echo "<select name='category' class='selectpicker show-tick'>";
                                    echo "<option value='' disabled selected>Please Select</option>";
                                    while($data=mysqli_fetch_assoc($rows))
                                    {

                                    echo "<option value='$data[Category_ID]'";                 
                                    if($cat == $data['Category_ID']) {
                                        echo "selected='selected'" ;}  echo "> $data[Category_Name] </option> " ;}
                                    echo "</select>";
                                    ?>
                            </div>
                            </div>

                            <?php
                                    $hc=$data1["Hardcopy_Availability"];
                                ?>
                            <div class="form-group form-float">
                            <div class="form-line">
                                <label style="font-weight: normal; color: #aaa;">Hardcopy Availability?</label>
                                <select name="hardcopy" class="selectpicker show-tick">
                                <option value="" disabled selected>Please Select</option>
                                <option value="Yes" <?php if($hc == "Yes") {echo "selected='selected'" ;} ?> >Yes</option>
                                <option value="No" <?php if($hc == "No") {echo "selected='selected'" ;} ?> >No</option>
                                </select>
                            </div>
                            </div>
            
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" maxlength="4" class="form-control" onkeypress='return digitsonly(event)' name="price" value="<?php echo $result['Price']; ?>" required>
                                        <label class="form-label">Price ($)</label>
                                    </div>
                                </div>

                            <div class="form-group form-float">
                            <div class="form-line">
                            <label for="file" style="font-weight: normal; color: #aaa;"> Upload eBook (PDF only) </label>
                            <input type="file" id="ebook" name="ebook" onchange="validatePDF(this)" />
                                </br>
                                </div>
                                </div>

                                <div class="form-group">
                                <div class="form-line">
                                <label for="image" class="control-label mb-1 underline_label" style="cursor:pointer;">Change uploaded image file</label> <br/>
                                    <input id="image" name="image" type="file" onchange="loadFile(event); validateIMG(this);" class="form-control hidden" /> 
						            <img id="output" type="file" src="<?php echo $result['Book_Cover']; ?>" style="border-radius: 20%; padding-top: 5px; width:150px; height:150px; object-fit: cover;"/>
                                </br> </br>
                                </div>
                                </div>

                                <?php

                                    $pre=$data1["Premium"];
                                ?>
                            <div class="form-group form-float">
                            <div class="form-line">
                                <label style="font-weight: normal; color: #aaa;">Premium Grade?</label>
                                <select name="premium" class="selectpicker show-tick">
                                <option value="" disabled selected>Please Select</option>
                                <option value="Yes" <?php if($pre == "Yes") {echo "selected='selected'" ;} ?> >Yes</option>
                                <option value="No" <?php if($pre == "No") {echo "selected='selected'" ;} ?> >No</option>
                                </select>
                            </div>
                            </div>

                                <button name="sub" class="btn btn-primary waves-effect" type="submit">UPDATE</button>

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

$( "selector" ).datepicker({
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
    include('connection.php');
    if(isset($_POST['sub']))
    {
        $n=$_POST['name'];
        $bd=$_POST['b_description'];
        $dd=addslashes($_POST['d_description']);
        $a=$_POST['author'];
        $rd=$_POST['r_date'];
        $c=$_POST['category'];
        $pri=$_POST['price'];
        $hc=$_POST['hardcopy'];
        $pre=$_POST['premium'];
    
        $image=$_FILES['image']['name'];
        $imagetn=$_FILES['image']['tmp_name'];
        $imagety=$_FILES['image']['type'];
        $imagesi=$_FILES['image']['size'];
        $folderim="../images/";
        $ebook=$_FILES['ebook']['name'];
        $ebooktn=$_FILES['ebook']['tmp_name'];
        $ebookty=$_FILES['ebook']['type'];
        $ebooksi=$_FILES['ebook']['size'];
        $folderebook="../ebooks/";

        $pathim=$folderim.$image;
        $pathebook=$folderebook.$ebook;
        move_uploaded_file($imagetn, $pathim);
        move_uploaded_file($ebooktn, $pathebook);

if($_FILES['image']['size'] == 0 && $_FILES['ebook']['size'] == 0)
{
    
    $q="update books set Book_Name='$n', Brief_Description='$bd', Detailed_Description='$dd', Author='$a', 
        Release_Date='$rd', Category_ID_F='$c', Price='$pri', Hardcopy_Availability='$hc', Premium='$pre' where Book_ID='$x'";
    $run=mysqli_query($con,$q);
    if($run)
    {
    echo "
    <script>alert('Book Details Updated');window.location.href='books_read.php'</script>";
    }
    else
    {
    echo "<script>alert('Update Unsuccessful')</script>";
    }
}
else if($_FILES['image']['size'] != 0 && $_FILES['ebook']['size'] == 0)
{
    
    $q="update books set Book_Name='$n', Brief_Description='$bd', Detailed_Description='$dd', Author='$a', 
        Release_Date='$rd', Category_ID_F='$c', Price='$pri', Hardcopy_Availability='$hc', 
        Book_Cover='$pathim', Premium='$pre' where Book_ID='$x'";
    $run=mysqli_query($con,$q);
    if($run)
    {
    echo "
    <script>alert('Book Details Updated');window.location.href='books_read.php'</script>";
    }
    else
    {
    echo "<script>alert('Update Unsuccessful')</script>";
    }
}
else if($_FILES['image']['size'] == 0 && $_FILES['ebook']['size'] != 0)
{
    
    $q="update books set Book_Name='$n', Brief_Description='$bd', Detailed_Description='$dd', Author='$a', 
        Release_Date='$rd', Category_ID_F='$c', Price='$pri', Hardcopy_Availability='$hc', PDF_File='$pathebook',  Premium='$pre' where Book_ID='$x'";
    $run=mysqli_query($con,$q);
    if($run)
    {
    echo "
    <script>alert('Book Details Updated');window.location.href='books_read.php'</script>";
    }
    else
    {
    echo "<script>alert('Update Unsuccessful')</script>";
    }
}
else if($_FILES['image']['size'] != 0 && $_FILES['ebook']['size'] != 0)
{
    
    $q="update books set Book_Name='$n', Brief_Description='$bd', Detailed_Description='$dd', Author='$a', 
        Release_Date='$rd', Category_ID_F='$c', Price='$pri', Hardcopy_Availability='$hc', PDF_File='$pathebook', 
        Book_Cover='$pathim', Premium='$pre' where Book_ID='$x'";
    $run=mysqli_query($con,$q);
    if($run)
    {
    echo "
    <script>alert('Book Details Updated');window.location.href='books_read.php'</script>";
    }
    else
    {
    echo "<script>alert('Update Unsuccessful')</script>";
    }
}
}   

// else if(!is_uploaded_file($_FILES['ebook']['tmp_name']))
// {
//     $q="update books set Book_Name='$n', Brief_Description='$bd', Detailed_Description='$dd', Author='$a', 
//         Release_Date='$rd', Category_ID_F='$c', Price='$pri', Hardcopy_Availability='$hc', Premium='$pre' 
//         where Book_ID='$x'";
//     $run=mysqli_query($con,$q);
//     if($run)
//     {
//     echo "
//     <script>alert('Book Details Updated');window.location.href='books_read.php'</script>";
//     }
//     else
//     {
//     echo "<script>alert('Update Unsuccessful')</script>";
//     }
// } 

// else
// {
//     $q="update books set Book_Name='$n', Brief_Description='$bd', Detailed_Description='$dd', Author='$a', 
//         Release_Date='$rd', Category_ID_F='$c', Price='$pri', Hardcopy_Availability='$hc', PDF_File='$pathebook', 
//         Premium='$pre' where Book_ID='$x'";
//     $run=mysqli_query($con,$q);
//     if($run)
//     {
//         echo "<script>alert('Book Details Updated');window.location.href='books_read.php';</script>";
//     }
//     else
//     {
//         echo "<script>alert('Update Unsuccessful')</script>";
//     }
// }

?>