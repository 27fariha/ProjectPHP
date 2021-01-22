<?php
include('dashboard.php');
include('connect.php');
$query="Select * from recipe";
if(isset($_GET['searchbtn']))
{
$searchtext=$_GET['search'];
$query="Select * from recipe where Name='$searchtext'";
}

$rows=mysqli_query($con,$query);

?>
 <section id="main-content">
      <section class="wrapper">
    
  <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> RECIPE Records</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                   
<th> Id </th>
<th> Title </th>
<th> Ingredients </th>


<th> Image </th>
<th> Recipe</th>

<th> Edit </th>
<th> Delete </th>
</tr>
                </thead>
                <tbody>



<?php
$qas="SELECT * FROM recipe";
$sel=mysqli_query($con,$qas);
while($data=mysqli_fetch_assoc($rows)){
echo "
<tr>
<td>".$data['Id']."</td>
<td>".$data['Title']."</td>
<td>".$data['Ingredience']."</td>


<td><img src='$data[Image]' height=55 width=55></td>
<td>".$data['Recipe']."</td>

<td><a href='recipeedit.php?id=$data[Id]'>Edit</a></td>
<td><a href='recipedel.php?id=$data[Id]'>Delete</a></td>
</tr>";
}
?>
</table>
<!--$quu="select * from Username where Id='$data[Username]'";
$rowsu=mysqli_query($con,$quu);
$datau=mysqli_fetch_array($rowsu);
-->