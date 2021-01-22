<?php session_start();?>
<?php
if($_SESSION['admin']==null){
	header('location:./AdminLogin.php');
}
?>
<?php
include ('head.php');
include ('db.php');
$q = "select * from  Admin";
$rows=mysqli_query($con,$q);

?>

<div class="card">
	<div class="card-header">
		<div class="card-title">Admin</div>
	</div>
	<div class="card-body">
		
		<table class="table mt-3">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Password</th>
					<th>Email</th>
					<th>Picture</th>
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
					<td>".$data['Name']."</td>
					<td>".$data['Pswrd']."</td>
					<td>".$data['email']."</td>
					<td><img src='$data[picture]' width=55 height=55></td>
					<td><a href='upd_admin.php?idd=".$data['Id']."'> Edit </a></td>
					<td><a href='Delete_admin.php?idd=".$data['Id']."'> Remove </a></td>
					</tr>";
				}

				?>
			</tbody>
		</table>
	</div>
</div>