<?php
include("check_session.php");
include("connection.php");
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$product_id=$_GET['product_id'];
///////picture delete/////////
$result=mysqli_query($connection,"select image from products where product_id='$product_id'")
or die("query is incorrect...");

list($picture)=mysqli_fetch_array($result);
$path="../images/products/$picture";

if(file_exists($path)==true)
{
  unlink($path);
}
else
{}
/*this is delet query*/
mysqli_query($connection,"delete from products where product_id='$product_id'")or die("query is incorrect...");
} 

///pagination
$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href="layout2/css/bootstrap.min.css" rel="stylesheet">
    <link href="layout2/css/font-awesome.min.css" rel="stylesheet">
    <link href="layout2/css/prettyPhoto.css" rel="stylesheet">
    <link href="layout2/css/price-range.css" rel="stylesheet">
    <link href="layout2/css/animate.css" rel="stylesheet">
	<link href="layout2/css/main.css" rel="stylesheet">
	<link href="layout2/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
  <?php include("include2/header.php");?>
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#c4e17f">
	<h1>Cosmetics List / Page <?php echo $page;?></h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>Product ID</th><th>Image</th><th>Name</th> <th>Price</th><th>
	<a class=" btn btn-primary" href="add_product.php">Add New</a>
		<a class=" btn btn-primary" href="edit_product.php">Edit Product</a>
		<a class=" btn btn-primary" href="cosmetic_pdf.php" target="_blank">Download Cosmetics PDF</a>

</th></tr>
    
<?php 
$result=mysqli_query($connection,"select product_id,image, product_name,price from products  where product_type like '%cosmetics%' order by rand()")or die ("query 1 incorrect.....");

while(list($product_id,$image,$product_name,$price)=mysqli_fetch_array($result))
{
echo "<tr><td>$product_id</td><td><img src='../images/products/$image' style='width:50px; height:50px;border:groove #000'></td><td>$product_name</td><td>$price</td>
<td>

<a class=' btn btn-success' href='cosmetics_list.php?product_id=$product_id&action=delete'>Delete</a>
</td></tr>";
}

?>
</table>
</div></div>
<nav align="center">
  
<?php 
//counting paging

$paging=mysqli_query($connection,"select product_id,image, product_name,price from products");
$count=mysqli_num_rows($paging);

$a=$count/5;
$a=ceil($a);
echo "<bt>";echo "<bt>";
for($b=1; $b<=$a;$b++)
{
?> 
<ul class="pagination" style="border:groove #666">
<li><a class="label-info" href="cosmetics_list.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li></ul>
<?php	
}
?>
</nav>
</div></div>
<?php include("include/js.php");?>
<?php include("include2/footer.php");?>
</body>
</html>