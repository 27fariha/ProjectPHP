<?php
include('dashboard.php');
include('connect.php');
$query="Select * from contact";

?>

 <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>  Contact </h3>
  <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
           
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
<th>Subject</th>
       <th>Message</th>
                  </tr>
                </thead>
                <tbody>
<?php
$qas="SELECT * FROM contact";
$sel=mysqli_query($con,$qas);
while($data=mysqli_fetch_assoc($sel)){
echo "<tr>
<td>".$data['Id']."</td>
<td>".$data['name']."</td>
<td>".$data['email']."</td>
<td>".$data['subject']."</td>
<td>".$data['message']."</td>


</tr>";
}
?>
</table>



<!--$quu="select * from name where Id='$data[name]'";
$rowsu=mysqli_query($con,$quu);
$datau=mysqli_fetch_array($rowsu);
-->