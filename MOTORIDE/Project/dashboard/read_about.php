	S<?php
include ('head.php');
include ('db.php');
$q = "select * from  About";
$rows=mysqli_query($con,$q);

?>
<table style="width:50%" border=10 align="center">
<tr>
	<th>ID</th>
	<th>Message</th>
	<th>Location</th>
	<th>Ph_no</th>
	<th>All_Ph_no</th>
	<th>Edit</th>
	<th>Remove</th>
</tr>

<?php
 while ($data=mysqli_fetch_assoc($rows))
 {
 	echo "<tr>
 	<td>".$data['Id']."</td>
 	<td>".$data['Message']."</td>
 	<td>".$data['Location']."</td>
 	<td>".$data['Ph_No']."</td>
 	<td>".$data['All_Ph_No']."</td>
 	
 	<td><a href='upd_about.php?idd=".$data['Id']."'> Edit </a></td>
 	<td><a href='Delete_about.php?idd=".$data['Id']."'> Remove </a></td>
 	</tr>";
 }

?>



</table>
