<?php session_start();?>
<?php
if($_SESSION['admin']==null){
	header('location:./AdminLogin.php');
}
?>
<?php
include ('head.php');
include ('db.php');
$q = "select * from  rentcar";
$rows=mysqli_query($con,$q);

?>
<div class="card">
	<div class="card-header">
		<div class="card-title">Rent</div>
	</div>
	<div class="card-body">
		<table class="table mt-3">
			<thead>
				<tr>
					<th>ID</th>
					<th>Car_id</th>
					<th>User_id</th>
					<th>Duration</th>
					<th>Date</th>
					<th>Price</th>
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
					<td>".$data['Car_id']."</td>
					<td>".$data['User_id']."</td>
					<td>".$data['Duration']."</td>
					<td>".$data['Date']."</td>
					<td>".$data['Price']."</td>
					<td><a href='upd_rent.php?idd=".$data['Id']."'> Edit </a></td>
					<td><a href='Delete_rent.php?idd=".$data['Id']."'> Remove </a></td>
					</tr>";
				}

				?>
			</tbody>
		</table>
	</div>
</div>