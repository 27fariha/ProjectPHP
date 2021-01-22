<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Edit Products</title>
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
   	<div class="container-fluid">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#c4e17f">
	<h1><span class="glyphicon glyphicon-tag"></span> Product / Edit Product  </h1></div><br>
	<div class="panel-body" style="background-color:#E6EEEE;">
		<div class="col-lg-7">
        <div class="well">


        <form method="POST">
	Product ID:<input type="text" name="pid" class="form-control"><br><br>
	Product Name:<input type="text" name="pname" class="form-control"><br><br>
	Details:<input type="text" name="details" class="form-control"><br><br>
	Price:<input type="text" name="price" class="form-control" ><br><br>
    Product Image: <input type="file" name="pimage"><br><br>

	<input type="submit" name="update" class="btn btn-success" value="Update" style="width:150px; height:60px">


</form>
 
	</div>
</div></div></div>
<?php include("include/js.php"); ?>
<?php include("include2/footer.php");?>


<?php

if(isset($_POST['update']))
{
	$hostname="localhost";
	$username="root";
	$password="";
	$database="ezyclick_onlinestore";
	$connect=mysqli_connect($hostname,$username,$password,$database);


    $pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$details=$_POST['details'];
	$price=$_POST['price'];
    $pimage=$_POST['pimage'];

	$querry=" UPDATE products SET product_name = '$pname',details = '$details' , price='$price' , image='$pimage' WHERE product_id='$pid' ";
	$result=mysqli_query($connect,$querry);
	if ($result) {
		echo "data updated";
	}
	else{
		echo "data not update";
	}

}



?>

</body>
</html>