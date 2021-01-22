<?php session_start(); ?>
<?php
if($_SESSION['abc']==null)
{
  header('location:loginuser.php');
}
?>

<?php
include('connect.php');
$q = "select * from quartly";
$rows1 = mysqli_query($con, $q);

?>
<?php
include('dashboardHeader.php');

?>

<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Quaterly Records</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.N0</th>
                                            <th>Quater</th>
        <th>Company ID</th>
        <th>Date</th>
        <th>Edit</th>
        <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
    while ($data = mysqli_fetch_assoc($rows1)) {
        echo "<tr style='justify-content:center'  >
        
         <td>" . $data['ID'] . "</td>    
<td>" . $data['Quater'] . "</td>
<td>" . $data['CompID'] . "</td>
<td>" . $data['Date'] . "</td>
<td><a href='editquaterly.php?a=".$data['ID']."'> Edit </a></td>
<td><a href='deletequaterly.php?ID=".$data['ID']."'> Delete </a></td>

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


