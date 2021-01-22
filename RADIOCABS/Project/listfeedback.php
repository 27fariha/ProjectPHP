<?php session_start(); ?>
<?php
if($_SESSION['abc']==null)
{
  header('location:login.php');
}
?>
<?php
include('connect.php');
$q = "select * from feedback";
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
                        <strong class="card-title">Feedback Records</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.N0</th>
                                    <th>Name</th>
                                    <th>Mobile_Number</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>Feedback_Type</th>
                                    <th>Description</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($data = mysqli_fetch_assoc($rows)) {
                                    echo "<tr>
<td>" . $data['Feedback_ID'] . "</td>
<td>" . $data['Name'] . "</td>
<td>" . $data['Mobile_Number'] . "</td>
<td>" . $data['Email'] . "</td>
<td>" . $data['City'] . "</td>
<td>" . $data['Feedback_Type'] . "</td>
<td>" . $data['Description'] . "</td>



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