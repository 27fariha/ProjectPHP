<?php

include('header.php');
include('connection.php');

if (!isset($_SESSION["ID_U"]))
{
   header("location: login.php");
}


$x=$_GET['idd'];
$query="SELECT * from order_items oi JOIN orders o on o.id = oi.order_id JOIN books b on b.Book_ID = oi.product_id WHERE order_id='$x'";

$rows=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($rows);

?>

	<div class="container">
    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="profile.php"><?php echo "$_SESSION[NAME_U]'s Profile"; ?> <i class="fa fa-chevron-right"></i></a></span></p>

    <article class="card">
        <header class="card-header"> Order Tracking </header>
	
        <div class="card-body">
            <h6><b>Order ID:</b> <?php echo $data["id"]; ?></h6>
            <article class="card">
                <div class="card-body row">
                    <div class="col"> <strong>Date Placed:</strong> <br> <?php echo $data["created"]; ?> </div>
                    <div class="col"> <strong>Delivery Address:</strong> <br> <?php echo $data["Address"]; ?> </div>
                    <div class="col" 
                    <?php if($data["status"]=="Cancelled"){ echo "style='color:red;' "; } if($data["status"]=="Delivered"){ echo "style='color:green;' "; } ?>> 
                    <strong style="color:black;">Status:</strong> <br> <?php echo $data["status"]; ?> 
                    </div>
                    
                </div>
            </article>
            <div class="track">
            <?php if($data["status"]=="Pending"){ ?>
		        <div class="step active"> <span class="icon" data-toggle="tooltip" data-placement="right" title="Pending" class="icon"> <i class="fa fa-clock"></i> </span> </div>
                <div class="step"><span data-toggle="tooltip" data-placement="right" title="Order Confirmed" class="icon"> <i class="fa fa-check"></i> </span> </div>
                <div class="step"> <span class="icon" data-toggle="tooltip" data-placement="right" title="Dispatched" class="icon"> <i class="fas fa-dove"></i> </span> </div>
                <div class="step"> <span class="icon" data-toggle="tooltip" data-placement="right" title="On it's way" class="icon"> <i class="fa fa-truck"></i> </span></div>
                <div class="step"> <span class="icon" data-toggle="tooltip" data-placement="right" title="Delivered" class="icon"> <i class="fa fa-box"></i> </span> </div>
            <?php } ?>
            <?php if($data["status"]=="Confirmed"){ ?>
		        <div class="step active"> <span class="icon" data-toggle="tooltip" data-placement="right" title="Pending" class="icon"> <i class="fa fa-clock"></i> </span> </div>
                <div class="step active"><span data-toggle="tooltip" data-placement="right" title="Order Confirmed" class="icon"> <i class="fa fa-check"></i> </span> </div>
                <div class="step"> <span class="icon" data-toggle="tooltip" data-placement="right" title="Dispatched" class="icon"> <i class="fas fa-dove"></i> </span> </div>
                <div class="step"> <span class="icon" data-toggle="tooltip" data-placement="right" title="On it's way" class="icon"> <i class="fa fa-truck"></i> </span></div>
                <div class="step"> <span class="icon" data-toggle="tooltip" data-placement="right" title="Delivered" class="icon"> <i class="fa fa-box"></i> </span> </div>
            <?php } ?>
            <?php if($data["status"]=="Dispatched"){ ?>
		        <div class="step active"> <span class="icon" data-toggle="tooltip" data-placement="right" title="Pending" class="icon"> <i class="fa fa-clock"></i> </span> </div>
                <div class="step active"><span data-toggle="tooltip" data-placement="right" title="Order Confirmed" class="icon"> <i class="fa fa-check"></i> </span> </div>
                <div class="step active"> <span class="icon" data-toggle="tooltip" data-placement="right" title="Dispatched" class="icon"> <i class="fas fa-dove"></i> </span> </div>
                <div class="step active"> <span class="icon" data-toggle="tooltip" data-placement="right" title="On it's way" class="icon"> <i class="fa fa-truck"></i> </span></div>
                <div class="step"> <span class="icon" data-toggle="tooltip" data-placement="right" title="Delivered" class="icon"> <i class="fa fa-box"></i> </span> </div>
            <?php } ?>
            <?php if($data["status"]=="Delivered"){ ?>
		        <div class="step active"> <span class="icon" data-toggle="tooltip" data-placement="right" title="Pending" class="icon"> <i class="fa fa-clock"></i> </span> </div>
                <div class="step active"><span data-toggle="tooltip" data-placement="right" title="Order Confirmed" class="icon"> <i class="fa fa-check"></i> </span> </div>
                <div class="step active"> <span class="icon" data-toggle="tooltip" data-placement="right" title="Dispatched" class="icon"> <i class="fas fa-dove"></i> </span> </div>
                <div class="step active"> <span class="icon" data-toggle="tooltip" data-placement="right" title="On it's way" class="icon"> <i class="fa fa-truck"></i> </span></div>
                <div class="step active"> <span class="icon" data-toggle="tooltip" data-placement="right" title="Delivered" class="icon"> <i class="fa fa-box"></i> </span> </div>
            <?php } ?>
            </div>

            <hr>
            <ul class="row">
            <?php 
            $rows1=mysqli_query($con,$query);
 while($data1=mysqli_fetch_assoc($rows1)){ ?>
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img style="border-radius:5%; object-fit: cover;" src="<?php echo "../../Dashboard/images/".$data1['Book_Cover']." ";?>" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title"><?php echo $data1["Book_Name"]; ?> <br> <?php echo "by $data1[Author]"; ?></p> <span class="text-muted"><?php echo "$$data1[Price] x $data1[quantity]"; ?> </span>
                        </figcaption>
                    </figure>
				</li>
			<?php }	?>
            </ul>
            <hr>
            <a href="active_orders_view.php" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
        </div>
    </article>
</div>


<?php

include('footer.php');

?>