<?php

include('header.php');
?>

<?php
include('connection.php');
$query="SELECT * from info";

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
                            <h2>
                                CONTACT INFO
                            </h2>

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                    		<tr>
                            <th>Phone #</th>
                            <th>Address</th>
                            <th>Email Address</th>
                            <th>Fax #</th>
                            <th>Facebook Page</th>
                            <th>Twitter Handle</th>
                            <th>Instagram Account</th>
                    		</tr>
                        	</thead>
                        	<tbody>

        <?php
        while($data=mysqli_fetch_assoc($rows)){
        echo "
        <tr>
        <td>".$data['phone']."</td>
        <td style='min-width:200px; max-width:200px;'>".$data['address']."</td>
        <td>".$data['email']."</td>
        <td>".$data['fax']."</td>
        <td>".$data['facebook']."</td>
        <td>".$data['twitter']."</td>
        <td>".$data['instagram']."</td>
        <td><a href='info_update.php?idd=$data[Info_ID]' class='btn btn-primary btn-xs'> Edit Info </a></td>
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