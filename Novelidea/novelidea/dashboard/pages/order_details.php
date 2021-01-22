<?php

include('header.php');
?>

<?php
include('connection.php');
$x=$_GET['idd'];
$query="SELECT * from order_items oi JOIN orders o on o.id = oi.order_id JOIN books b on b.Book_ID = oi.product_id WHERE order_id='$x'";

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
                        <a style="float:right;" class='btn btn-primary btn-xs' href="order_read.php"> Go Back to Order List </a>
                            <h2>
                                ORDER DETAILS
                            </h2>


                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                    		<tr>
                            <th>Order #</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                    		</tr>
                        	</thead>
                        	<tbody>

        <?php
        while($data=mysqli_fetch_assoc($rows)){
        echo "
        <tr>
        <td>".$data['order_id']."</td>
        <td>".$data['Book_Name']."</td>
        <td>$".$data['Price']."</td>
        <td>".$data['quantity']."</td>
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