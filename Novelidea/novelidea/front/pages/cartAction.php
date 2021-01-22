<?php

// Initialize shopping cart class 
require_once 'Cart.class.php'; 
$cart = new Cart; 
 
// Include the database config file 
require_once 'connection.php'; 
 
// Default redirect page 
$redirectLoc = 'index.php'; 
 
// Process request based on the specified action 
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){ 
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){ 
        $productID = $_REQUEST['id']; 
         
        // Get product details 
        $query = $con->query("SELECT * FROM books WHERE Book_ID = ".$productID); 
        $row = $query->fetch_assoc(); 
        $itemData = array( 
            'id' => $row['Book_ID'], 
            'name' => $row['Book_Name'], 
            'price' => $row['Price'], 
            'qty' => 1 
        ); 
         
        // Insert item to cart 
        $insertItem = $cart->insert($itemData); 
         
        // Redirect to cart page 
        $redirectLoc = $insertItem?'viewCart.php':'index.php'; 
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){ 
        // Update item data in cart 
        $itemData = array( 
            'rowid' => $_REQUEST['id'], 
            'qty' => $_REQUEST['qty'] 
        ); 
        $updateItem = $cart->update($itemData); 
         
        // Return status 
        echo $updateItem?'ok':'err';die; 
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){ 
        // Remove item from cart 
        $deleteItem = $cart->remove($_REQUEST['id']); 
         
        // Redirect to cart page 
        $redirectLoc = 'viewCart.php'; 
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0){ 
        $redirectLoc = 'checkout.php'; 
         
        // Store post data 
        $_SESSION['postData'] = $_POST; 
     
       
        $phone = strip_tags($_POST['phone']); 
        $address = strip_tags($_POST['address']); 
         
        $errorMsg = ''; 
      
        if(empty($phone)){ 
            $errorMsg .= 'Please enter your phone number.<br/>'; 
        } 
        if(empty($address)){ 
            $errorMsg .= 'Please enter your address.<br/>'; 
        } 
         
        if(empty($errorMsg)){ 
            // Insert customer data in the database 
           
                $custID = $_SESSION['ID_U']; 
                 
                // Insert order info in the database 
                $insertOrder = $con->query("INSERT INTO orders (customer_id, grand_total, created, `phone`, `Address`, status) VALUES ($custID, '".$cart->total()."', NOW(),'".$phone."' ,'".$address."','Pending' )"); 
             
                if($insertOrder){ 
                    $orderID = $con->insert_id; 
                     
                    // Retrieve cart items 
                    $cartItems = $cart->contents(); 
                     
                    // Prepare SQL to insert order items 
                    $sql = ''; 
                    foreach($cartItems as $item){ 
                        $sql .= "INSERT INTO order_items (order_id, product_id, quantity) VALUES ('".$orderID."', '".$item['id']."', '".$item['qty']."');"; 
                    } 
                     
                    // Insert order items in the database 
                    $insertOrderItems = $con->multi_query($sql); 
                     
                    if($insertOrderItems){ 
                        // Remove all items from cart 
                        echo "<script>alert('Your Order has been placed Successfuly we will get back to you soon!')</script>";


                            $to_email = $_SESSION['MAIL_U'];
                            $subject = 'Order Update';
                            $message = 'Congratulations!! Your order has been placed. and Your Tracking ID is '.$orderID.'.';
                            $headers = 'From: lab1807c1@gmail.com';
                            mail($to_email,$subject,$message,$headers) or die("Error!");

                            $cart->destroy(); 
                         
                        // Redirect to the status page 
                        $redirectLoc = 'orderSuccess.php?id='.$orderID; 
                    }
                    else{ 
                        $sessData['status']['type'] = 'error'; 
                        $sessData['status']['msg'] = 'Some problem occurred, please try again 1.'; 
                    } 
                }
                else{ 
                    $sessData['status']['type'] = 'error'; 
                    $sessData['status']['msg'] = 'Some problem occurred, please try again 2.'; 
                } 
           
        }else{ 
            $sessData['status']['type'] = 'error'; 
            $sessData['status']['msg'] = 'Please fill all the mandatory fields.<br>'.$errorMsg;  
        } 
        $_SESSION['sessData'] = $sessData; 
    } 
} 
 
// Redirect to the specific page 
header("Location: $redirectLoc"); 
exit();