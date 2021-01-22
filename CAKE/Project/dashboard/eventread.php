<?php
include('dashboard.php');
include('connect.php');
$query="Select * from event";

?>

 <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>  Event</h3>
  <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Event Records</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Type</th>
                    <th>Edit</th>
       <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
<?php
$qas="SELECT * FROM event";
$sel=mysqli_query($con,$qas);
while($data=mysqli_fetch_assoc($sel)){
echo "<tr>
<td>".$data['Id']."</td>
<td>".$data['type']."</td>

<td><a href='eventedit.php?id=$data[Id]'>Edit</a></td>
<td><a href='eventdelete.php?id=$data[Id]'>Delete</a></td>
</tr>";
}
?>
</table>



<!--$quu="select * from name where Id='$data[name]'";
$rowsu=mysqli_query($con,$quu);
$datau=mysqli_fetch_array($rowsu);
-->