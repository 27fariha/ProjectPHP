<?php

include('header.php');
?>

<?php
include('connection.php');
$query="SELECT * from members m JOIN subscription s on s.Subscription_ID = m.Subscription_ID_F";

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
                                MEMBERS INFO
                            </h2>

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                    		<tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Card Details</th>
                            <th>Subscription Type</th>
                            <th>Date Registered</th>
                    		</tr>
                        	</thead>
                        	<tbody>

        <?php
        while($data=mysqli_fetch_assoc($rows)){
        echo "
        <tr>
        <td>".$data['Name']."</td>
        <td>".$data['Email']."</td>
        <td>".$data['Card_Details']."</td>
        <td>".$data['Subscription_Name']."</td>
        <td>".$data['Date_Registered']."</td>
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