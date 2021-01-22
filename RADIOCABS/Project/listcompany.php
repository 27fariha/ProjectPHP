<?php session_start(); ?>
<?php
if($_SESSION['abc']==null)
{
  header('location:login.php');
}
?>
<?php
include('connect.php');
$q = "select * from company";
$rows = mysqli_query($con, $q);


?>
<?php
include('dashboardHeader.php');
?>

<head>
    <link rel="stylesheet" href="listcompany.css">
</head>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Company Records</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.N0</th>
                                    <th>Company Name</th>
                                    <th>Designation</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Telephone</th>
                                    <th>Fax Number</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Membership</th>
                                    <th>Payment</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($data = mysqli_fetch_assoc($rows)) {
                                    echo "<tr style='justify-content:center'  >
        <td>" . $data['Advertise_ID'] . "</td>
<td>" . $data['Company_Name'] . "</td>
<td>" . $data['Designation'] . "</td>
<td>" . $data['Address'] . "</td>
<td>" . $data['Mobile'] . "</td>
<td>" . $data['Telephone'] . "</td>
<td>" . $data['Fax_Number'] . "</td>
<td>" . $data['Email'] . "</td>
<td>" . $data['Description'] . "</td>
<td>" . $data['Membership'] . "</td>
<td>" . $data['Payment'] . "</td>
<td><a href='Update.php?idd=".$data['Advertise_ID']."'> Edit </a></td>
<td><a href='deletecompany.php?Advertise_ID=".$data['Advertise_ID']."'> Delete </a></td>


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
</div><!-- .content -->

<?php
include('dashboardfooter.php');
?>