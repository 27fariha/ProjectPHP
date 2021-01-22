<?php session_start();?>
<?php
if($_SESSION['admin']==null){
	header('location:./AdminLogin.php');
}
?>
<?php
include ('head.php');
include ('db.php');
$q = "select * from register";
$rows=mysqli_query($con,$q);

?>


<div class="card">
	<div class="card-header">
		<div class="card-title">Register</div>
	</div>
	<div class="card-body">
		<table class="table mt-3">
			<thead>
				<tr>
					<th>ID</th>
					<th>User Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Cnic</th>
					<th>Contact</th>
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
					<td>".$data['User_name']."</td>
					<td>".$data['email']."</td>
					<td>".$data['Pswrd']."</td>
					<td>".$data['cnic']."</td>
					<td>".$data['contact']."</td>

					<td><a href='Update_reg.php?idd=".$data['Id']."'> Edit </a></td>
					<td><a href='Delete_reg.php?idd=".$data['Id']."'> Remove </a></td>
					</tr>";
				}

				?>
			</tbody>
		</table>
	</div>
</div>