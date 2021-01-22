<?php
include("check_session.php");
include("connection.php");  
$user_id=$_SESSION['user_id'];
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
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Welcome  </h1></div><br>
	<h2 style="padding:5px;">EzyClick Store Admin Panel</h2>
	<div class="panel-body">
		<h3>
<?php  //success message
if(isset($_POST['success'])) {
$success = $_POST["success"];
echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
}
?></h3>
	</div>
</div></div></div>
<?php include("include/js.php"); ?>
<?php include("include2/footer.php"); ?>
</body>
</html>