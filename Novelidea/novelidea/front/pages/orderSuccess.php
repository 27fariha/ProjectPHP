
<?php 
include('header.php');

if(!isset($_REQUEST['id'])){ 
    header("Location: index.php"); 
} 
 
// Include the database config file 
require_once 'connection.php'; 
 
// Fetch order details from database 
$result = $con->query("SELECT r.*, c.Name, c.Email FROM orders as r LEFT JOIN members as c ON c.Member_ID = r.customer_id WHERE r.id = ".$_REQUEST['id']); 
 
if($result->num_rows > 0){ 
    $orderInfo = $result->fetch_assoc(); 
}else{ 
    header("Location: index.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Order Status - PHP Shopping Cart</title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- Custom style -->
<link href="../css/style.css" rel="stylesheet">

<style>
#page-wrap {
     width: 800px;
     margin: 0 auto;
     text-align: center;
     font-family: Calibri;
}
</style>
</head>
<body>
<div id="page-wrap" class="container">
    <h1 style="font-family: Calibri;">ORDER STATUS</h1>
    <div class="col-12">
        <?php if(!empty($orderInfo)){ ?>
            <div class="col-md-12">
                <div class="alert alert-success">Your order has been placed successfully. </br> An email has been sent to you. </div>
            </div>
			
            <!-- Order status & shipping info -->
            <div class="col-lg-12 ord-addr-info">
                <div class="hdr">Order Info</div>
                <p><b>Reference ID:</b> #<?php echo $orderInfo['id']; ?></p>
                <p><b>Total:</b> <?php echo '$'.$orderInfo['grand_total'].' USD'; ?></p>
                <p><b>Placed On:</b> <?php echo $orderInfo['created']; ?></p>
                <p><b>Buyer Name:</b> <?php echo $orderInfo['Name'] ?></p>
                <p><b>Email:</b> <?php echo $orderInfo['Email']; ?></p>
            </div>
			
            <!-- Order items -->
            <div class="row col-lg-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>QTY</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        // Get order items from the database 
                        $result = $con->query("SELECT i.*, p.Book_Name, p.Price FROM order_items as i LEFT JOIN books as p ON p.Book_ID = i.product_id WHERE i.order_id = ".$orderInfo['id']); 
                        if($result->num_rows > 0){  
                            while($item = $result->fetch_assoc()){ 
                                $price = $item["Price"]; 
                                $quantity = $item["quantity"]; 
                                $sub_total = ($price*$quantity); 
                        ?>
                        <tr>
                            <td><?php echo $item["Book_Name"]; ?></td>
                            <td><?php echo '$'.$price.' USD'; ?></td>
                            <td><?php echo $quantity; ?></td>
                            <td><?php echo '$'.$sub_total.' USD'; ?></td>
                        </tr>
                        <?php } 
                        } ?>
                    </tbody>
                </table>
            </div>
        <?php }else{ ?>
        <div class="col-md-12">
            <div class="alert alert-danger">Your order submission failed.</div>
        </div>
        <?php } ?>
    </div>
</div>
</body>
</html>

<?php 
include('footer.php');
?>