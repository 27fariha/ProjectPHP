<?php
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

    $q="insert into books(Book_Name, Brief_Description, Detailed_Description, Author, Release_Date, Category_ID_F, Price, Hardcopy_Availability, PDF_File, Book_Cover, Premium) values('$n','$bd','$dd','$a', '$rd','$c','$pri','$hc','$pathebook','$pathim','$pre')";
    $res=mysqli_query($con,$q);
    if($res)
    {
    echo "
    <script>alert('Book Added');window.location.href='books_read.php'</script>";
    }
    else
    {
        echo "<script>alert('Book Creation Unsuccessful')</script>";
    }	
}
else
{
    echo "<script>alert('Error occurred while submiting data')</script>";
}
    ?>