<?php
include('connect.php');
include('dashboard.php');
$query="Select * from product";
if(isset($_GET['searchbtn']))
{
$searchtext=$_GET['search'];
$query="Select * from product where Name='$searchtext'";
}

$rows=mysqli_query($con,$query);

?>
<form action="" method="GET">

</form>
 <section id="main-content">
      <section class="wrapper">
        
  <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-product-hunt"></i>  PRODUCT RECORDS</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
<th> Id </th>
<th> Cid </th>
<th> Eid </th>
<th> cakename </th>
<th> price</th>
<th> Available</th>
<th> Type</th>
<th> ItemCode</th>
<th> Image </th>
<th> Edit </th>
<th> Delete </th>
</tr>
                </thead>
                <tbody>


<?php

while($data=mysqli_fetch_assoc($rows)){
echo "
<tr>
<td>".$data['Id']."</td>
<td>".$data['Cid']."</td>
<td>".$data['eid']."</td>
<td>".$data['Cake_name']."</td>
<td>".$data['Price']."</td>
<td>".$data['Available']."</td>
<td>".$data['type']."</td>
<td>".$data['itemcode']."</td>
<td><img src='$data[image]' height=55 width=55></td>
<td><a href='productedit.php?id=$data[Id]'>Edit</a></td>
<td><a href='productdelete.php?id=$data[Id]'>Delete</a></td>
</tr>";
}
?>
</table>
<!--$quu="select * from cakename where Id='$data[cake_name]'";

-->