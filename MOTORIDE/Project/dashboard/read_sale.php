<?php session_start();?>
<?php
if($_SESSION['admin']==null){
	header('location:./AdminLogin.php');
}
?>
<?php
include ('head.php');
include ('db.php');
$q = "select * from  salecar";
$rows=mysqli_query($con,$q);

?>


<div class="card">
	<div class="card-header">
		<div class="card-title">Sale</div>
	</div>
	<div class="card-body">

		<table class="table mt-3">
			<thead>
				<tr>
					<th>ID</th>
					<th>Car_id</th>
					<th>User_id</th>
					<th>Date</th>
					<th>Deliverable</th>
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
					<td>".$data['Date']."</td>
					<td>".$data['Deliverable']."</td>
					<td><a href='upd_sale.php?idd=".$data['Id']."'> Edit </a></td>
					<td><a href='Delete_sale.php?idd=".$data['Id']."'> Remove </a></td>
					</tr>";
				}

				?>
			</tbody>
		</table>
	</div>
</div>