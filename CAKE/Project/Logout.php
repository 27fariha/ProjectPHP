<?php session_start();?>
<?php
session_destroy();
echo "<script> alert('Logged Out'); window.location.href = './index.php' </script>"
?>