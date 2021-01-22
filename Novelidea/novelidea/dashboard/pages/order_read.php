<?php

include('header.php');
?>

<?php
include('connection.php');
$query="SELECT * from orders o JOIN members m on m.Member_ID = o.customer_id";

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
                                ORDERS
                            </h2>

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                    		<tr>
                            <th>Order #</th>
                            <th>Name</th>
                            <th>Grand Total</th>
                            <th>Order Placed</th>
                            <th>Contact #</th>
                            <th>Address</th>
                            <th>Status</th>
                    		</tr>
                        	</thead>
                        	<tbody>

        <?php
        while($data=mysqli_fetch_assoc($rows)){
        echo "
        <tr>
        <td><a href='order_details.php?idd=$data[id]' data-toggle='tooltip' data-placement='right' title='Click to view details of Order# $data[id]' class='btn btn-success btn-xs'>".$data['id']."</a></td>
        <td>".$data['Name']."</td>
        <td>$".$data['grand_total']."</td>
        <td>".$data['created']."</td>
        <td>".$data['phone']."</td>
        <td>".$data['Address']."</td>
        <td>".$data['status']."</td>
        <td><a href='order_update.php?idd=$data[id]' class='btn btn-primary btn-xs'> Update Status </a></td>
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