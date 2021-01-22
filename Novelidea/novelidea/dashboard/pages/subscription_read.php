<?php

include('header.php');
?>

<?php
include('connection.php');
$query="SELECT * FROM subscription";

$rows=mysqli_query($con,$query);
 
?>

<head>

      <!-- Delete Confirmation Dialogue Start-->
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('If you delete this package then all the users who have subscribed to this package will also be deleted. Are you sure you want to delete this?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
    <!-- Delete Confirmation Dialogue End-->

</head>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <a style="float:right;" href="subscription_form.php" class="btn btn-success btn-xs"> Add a Package </a>
                            <h2>
                                SUBSCRIPTION PACKAGES
                            </h2>

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                    		<tr>
                			<th>ID</th>
                            <th>Package's Name</th>
                            <th>Duration</th>
                            <th>Charges</th>
                            <th>Description</th>
                            <th>Image</th>
                			<th>Edit</th>
                			<th>Delete</th>
                    		</tr>
                        	</thead>
                        	<tbody>

        <?php
        while($data=mysqli_fetch_assoc($rows)){
        echo "
        <tr>
        <td>".$data['Subscription_ID']."</td>
        <td>".$data['Subscription_Name']."</td>
        <td>".$data['Duration']."</td>";
        if($data['Charges'] == 0)
        {
       echo "<td style='color:green;'>FREE</td>";
        }
        else
        {
            echo "<td>$".$data['Charges']."</td>";
        }
       echo " <td style='min-width:150px; max-width:150px;'>".$data['Description']."</td>
        <td> <img src='$data[Image]' style='border-radius: 25%; height:60px; width:60px; object-fit: cover; border: 3px solid white' /> </td>
        <td><a href='subscription_update.php?idd=$data[Subscription_ID]' class='btn btn-primary btn-xs'> Edit </a></td>
        <td><a href='subscription_delete.php?idd=$data[Subscription_ID]' class='btn btn-danger btn-xs delete'> Delete </a></td>
        </tr>";
        }
        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


<?php

include('footer.php');

?>