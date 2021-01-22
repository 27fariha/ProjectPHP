<?php
    include('connection.php');
    if(isset($_POST['sub']))
    {
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=$_POST['password'];
    $c=$_POST['card'];
    $s=$_POST['subscription'];
    $d=$_POST['date'];

    $d = date('Y-m-d');
    $q="insert into members(Name,Email,Password,Card_Details,Subscription_ID_F,Date_Registered) values('$n','$e','$p','$c','$s','$d')";
    $res=mysqli_query($con,$q);
    if($res){
    echo "
    <script>alert('Registration Successful');window.location.href='login.php';</script>";

    }
    else{
        echo "
        <script>alert('Registration Failed');</script>";
    }

    }
    ?>