<?php
include('connect.php');
$query="Select * from user";
if(isset($_GET['searchbtn']))
{
$searchtext=$_GET['search'];
$query="Select * from user where Name='$searchtext'";
}

$rows=mysqli_query($con,$query);

?>
<form action="" method="GET">
<input type="text" name="search">
<input type="submit" name="searchbtn" Value="Search">
<a href="userread.php"><input type="submit" name="reset" Value="Reset"></a>
</form>


<table border=1>
<tr>
<th> Id </th>
<th> Name </th>
<th> Username </th>
<th> Email </th>
<th> Password</th>

<th> Edit </th>
<th> Delete </th>
</tr>
<?php
while($data=mysqli_fetch_assoc($rows)){

echo "
<tr>
<td>".$data['Id']."</td>
<td>".$data['Name']."</td>
<td>".$data['Username']."</td>
<td>".$data['Email']."</td>
<td>".$data['Password']."</td>

<td><a href='Update.php?id=$data[Id]'>Edit</a></td>
<td><a href='Delete.php?id=$data[Id]'>Delete</a></td>
</tr>";
}
?>
</table>
<!--$quu="select * from Username where Id='$data[Username]'";
$rowsu=mysqli_query($con,$quu);
$datau=mysqli_fetch_array($rowsu);--