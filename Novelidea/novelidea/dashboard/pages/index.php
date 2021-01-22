<?php
include('header.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>


Welcome <?php echo $_SESSION['NAME'];?>!

<?php
include('footer.php');
?>
