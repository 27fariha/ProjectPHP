<?php session_start(); ?>
<?php
if($_SESSION['abc']==null)
{
  header('location:login.php');
}
?>

<?php
include('connect.php');
$q = "select * from driver";
$rows = mysqli_query($con, $q);
?>
<?php
include('headerr.php');
?>

<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Driver Records</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.N0</th>
                                            <th>Driver Name</th>
        <th>Password</th>
        <th>Contact Person</th>
        <th>Address</th>
        <th>City</th>
        <th>Mobile</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Experience</th>
        <th>Description</th>
        <th>Payment</th>
       
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
    while ($data = mysqli_fetch_assoc($rows)) {
        echo "<tr style='justify-content:center'  >
        
        <td>" . $data['Driver_ID'] . "</td>    
<td>" . $data['Driver_Name'] . "</td>
<td>" . $data['Password'] . "</td>
<td>" . $data['Contact_Person'] . "</td>
<td>" . $data['Address'] . "</td>
<td>" . $data['City'] . "</td>
<td>" . $data['Mobile'] . "</td>
<td>" . $data['Telephone'] . "</td>
<td>" . $data['Email'] . "</td>
<td>" . $data['Experience'] . "</td>
<td>" . $data['Description'] . "</td>
<td>" . $data['Payment'] . "</td>


</tr>";
    }
    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>

<?php
include('dashboardfooter.php');
?>


