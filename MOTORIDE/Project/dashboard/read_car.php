<?php session_start();?>
<?php
if($_SESSION['admin']==null){
	header('location:./AdminLogin.php');
}
?>
<?php
include ('head.php');
include ('db.php');
$q = "select * from  cars";
$rows=mysqli_query($con,$q);

?>

<div class="card">
	<div class="card-header">
		<div class="card-title">Cars</div>
	</div>
	<div class="card-body">
		
		<table class="table mt-3">
			<thead>
				<tr>
					<th>Id</th>
					<th>Picture</th>
					<th>Car_Name</th>
					<th>Model_Year</th>
					<th>Specification</th>
					<th>Company Name</th>
					<th>No_Plate</th>
					<th>Price</th>
					<th>Available</th>
					<th>Edit</th>
					<th>Remove</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($data=mysqli_fetch_assoc($rows))
				{
					echo "<tr>
					<td>".$data['Id']."</td>
					<td><img src='$data[Pic]' width=55 height=55></td>
					<td>".$data['Car_name']."</td>
					<td>".$data['Model_year']."</td>
					<td>".$data['Specification']."</td>
					<td>".$data['Company']."</td>
					<td>".$data['No_plate']."</td>
					<td>".$data['Price']."</td>
					<td>".$data['Available']."</td>
					
					
					<td><a href='upd_car.php?idd=".$data['Id']."'> Edit </a></td>
					<td><a href='Delete_car.php?idd=".$data['Id']."'> Remove </a></td>
					</tr>";
				}

				?>
			</tbody>
		</table>
	</div>
</div>