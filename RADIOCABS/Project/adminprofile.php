<?php session_start(); ?>
<?php
if($_SESSION['abc']==null)
{
  header('location:login.php');
}
?>

<?php
include('connect.php');
$q = "select * from admin";
$rows = mysqli_query($con, $q);


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
                                <strong class="card-title">Admin Profile</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.N0</th>
                                            <th>Username</th>
        <th>Password</th>
      
        <th>Edit</th>
       
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
    while ($data = mysqli_fetch_assoc($rows)) {
        echo "<tr style='justify-content:center'  >
        
        <td>" . $data['ID'] . "</td>    
<td>" . $data['username'] . "</td>
<td>" . $data['password'] . "</td>
<td><a href='profileedit.php?id=".$data['ID']."'> Edit </a></td>



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


