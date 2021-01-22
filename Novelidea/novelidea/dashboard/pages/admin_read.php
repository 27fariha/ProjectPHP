<?php

include('header.php');
?>

<?php
include('connection.php');
$query="SELECT * FROM admin";

$rows=mysqli_query($con,$query);
 
?>

<head>

      <!-- Delete Confirmation Dialogue Start-->
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure you want to delete this?')){
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
                        <a style="float:right;" href="admin_form.php" class="btn btn-success btn-xs"> Create an Admin </a>

                            <h2>
                                ADMIN DETAILS
                            </h2>

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                    		<tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Image</th>
                            <th>Email</th>
                    		</tr>
                        	</thead>
                        	<tbody>

        <?php
        while($data=mysqli_fetch_assoc($rows)){
        echo "
        <tr>
        <td>".$data['Name']."</td>
        <td>".$data['Gender']."</td>
        <td> <img src='$data[Image]' style='border-radius: 50%; height:60px; width:60px; object-fit: cover; border: 3px solid white' /> </td>
        <td>".$data['Email']."</td>
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