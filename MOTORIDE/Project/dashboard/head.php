
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
<?php
include('db.php');
$q="SELECT * FROM  Admin";
$ras=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($ras);

?>

</head>

<div class="main-header" >
	<div class="logo-header">
		<a href="" class="logo">
			Admin Panel
		</a>
		<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			
		</div>
		<nav class="navbar navbar-header navbar-expand-lg">
			<div class="container-fluid" >

				
				<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

					<div class="card-header">
			<button><a href="./Logout.php">LOG OUT</a></button>
		</div>
				</ul>

			</div>
		</nav>
	</div>
	<div class="sidebar" <style type="text/css" ></style>>
		<div class="scrollbar-inner sidebar-wrapper">
			<div class="user">					<img src="<?php echo $data['picture'];?>">

				<div class="photo">
				</div>
				<div class="info">
					<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							<span class="user-level">Administrator</span>

						</span>
					</a>
					<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>

<?php echo "<a href='upd_admin.php?idd=".$_SESSION['admin1']."'/>";?>
											<span class="link-collapse">Admin</span>
										</a>
									</li>
								</ul>
							</div>

				</div>
			</div>
			<ul class="nav">
							<li class="nav-item">
							<a href="read_reg.php">
								<i class="la la-table"></i>
								<p>Reg Read</p>
								
							</a>
						</li>

						<li class="nav-item">
							<a href="Cars.php">
								<i class="la la-table"></i>
								<p>Add a New Car</p>
								
							</a>
						</li>


						<li class="nav-item">
							<a href="read_car.php">
								<i class="la la-table"></i>
								<p>Car Read</p>
								
							</a>
						</li>
						<li class="nav-item">
							<a href="read_rent.php">
								<i class="la la-table"></i>
								<p>Rent Read</p>
								
							</a>
						</li>
						<li class="nav-item">
							<a href="read_sale.php">
								<i class="la la-table"></i>
								<p>sale Read</p>
								
							</a>
						</li>
							
										

















										<li class="nav-item update-pro">
											
										</li>
									</ul>
								</div>
							</div>



							<div class="wrapper">
								<div class="main-panel">

									<div class="content">
										<div class="container">
											<script src="assets/js/core/jquery.3.2.1.min.js"></script>
											<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
											<script src="assets/js/core/popper.min.js"></script>
											<script src="assets/js/core/bootstrap.min.js"></script>
											<script src="assets/js/plugin/chartist/chartist.min.js"></script>
											<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
											<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
											<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
											<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
											<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
											<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
											<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
											<script src="assets/js/ready.min.js"></script>
											<script src="assets/js/demo.js"></script>