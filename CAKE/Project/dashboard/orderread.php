<?php
include('connect.php');
include('dashboard.php');
$query="Select * from orderr";


$rows=mysqli_query($con,$query);

?>
<form action="" method="GET">

</form>
 <section id="main-content">
      <section class="wrapper">
        
  <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i>  ORDER RECORDS</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
<th> Id </th>
<th> Name </th>
<th> Contact </th>
<th> Delivery_address</th>
<th> Delivery_date</th>


</tr>
                </thead>
                <tbody>


<?php

while($data=mysqli_fetch_assoc($rows)){
echo "
<tr>
<td>".$data['Id']."</td>
<td>".$data['Name']."</td>
<td>".$data['Contact']."</td>
<td>".$data['Delivery_address']."</td>
<td>".$data['Delivery_date']."</td>
</tr>";
}
?>
</table>
<!--$quu="select * from cakename where Id='$data[cake_name]'";

-->